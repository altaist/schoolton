<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Market\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Mail\OrderCreatedNotification;
use Illuminate\Support\Facades\Mail;
use App\Models\Product;

class OrderController extends BaseController
{
    public function show(int $orderId)
    {
        $order = $this->getItem($orderId);
        return $this->inertia('Order', [$order]);
    }
    public function index(Request $request)
    {
        $collection = $this->getCollection($request);
        return $this->inertia('OrderList', [$collection]);
    }

    public function getItem(int $orderId)
    {
        $orderService = OrderService::make();
        return $orderService->getOrder($orderId);
    }

    public function getCollection(Request $request)
    {
        $orderService = OrderService::make();
        return $orderService->getOrderCollection($request);
    }

    public function getOrdersForUser(Request $request, User $user)
    {
        $orderService = OrderService::make();
        return $orderService->getOrdersForUser($user);
    }

    public function store(Request $request)
    {
        Log::info('=== ORDER CONTROLLER STORE METHOD CALLED ===', [
            'timestamp' => now(),
            'method' => $request->method(),
            'url' => $request->fullUrl(),
            'user_agent' => $request->userAgent()
        ]);
        
        // Проверяем reCAPTCHA только если не тестовый режим
        if (!config('robokassa.test_mode')) {
            $recaptcha = $request->input('g-recaptcha-response');
            
            $url = 'https://www.google.com/recaptcha/api/siteverify';
            $data = [
                'secret' => config('services.recaptcha.secret_key'),
                'response' => $recaptcha
            ];

            $options = [
                'http' => [
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method' => 'POST',
                    'content' => http_build_query($data)
                ]
            ];

            $context = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $resultJson = json_decode($result);

            if (!$resultJson->success || $resultJson->score < 0.5) {
                return back()
                    ->withErrors(['captcha' => 'Ошибка проверки reCAPTCHA'])
                    ->withInput();
            }
        }

        Log::info('Received order request', [
            'data' => $request->all()
        ]);

        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'email' => 'required|email|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'birth_time' => 'required',
            'birth_city' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            Log::error('Order validation failed', [
                'errors' => $validator->errors()->toArray(),
                'input_data' => $request->except(['g-recaptcha-response', '_token'])
            ]);
            
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            Log::info('Creating order - step 1: Finding product', ['product_id' => $request->product_id]);
            
            $product = Product::findOrFail($request->product_id);
            
            Log::info('Creating order - step 2: Product found', ['product' => $product->toArray()]);
            
            $expiresAt = now()->addMinutes((int)config('robokassa.wait_time'))->setTimezone('UTC');
            
            Log::info('Creating order - step 3: Calculated expires_at', ['expires_at' => $expiresAt]);
            
            $order = Order::create([
                'order_id' => (string) Str::uuid(),
                'email' => $request->email,
                'gender' => $request->gender,
                'birth_date' => $request->birth_date,
                'birth_time' => $request->birth_time,
                'birth_city' => $request->birth_city,
                'product_id' => $request->product_id,
                'amount' => $product->price,
                'status' => 'new',
                'expires_at' => $expiresAt
            ]);

            Log::info('Creating order - step 4: Order created successfully', [
                'order_id' => $order->id,
                'uuid' => $order->order_id
            ]);

            // Пытаемся отправить email, но не прерываем процесс если не получится
            try {
                Log::info('Creating order - step 5: Attempting to send email');
                Mail::to($order->email)->send(new OrderCreatedNotification($order));
                Log::info('Creating order - step 6: Email sent successfully');
                $emailSent = true;
            } catch (\Exception $emailError) {
                Log::warning('Creating order - step 6: Email sending failed', [
                    'error' => $emailError->getMessage(),
                    'order_id' => $order->id
                ]);
                $emailSent = false;
            }

            Log::info('Order created successfully', [
                'order_id' => $order->id,
                'uuid' => $order->order_id,
                'email_sent' => $emailSent
            ]);

            Log::info('Creating order - step 7: Redirecting to order page', [
                'redirect_route' => 'order.show',
                'order_uuid' => $order->order_id
            ]);

            return redirect()->route('order.show', ['orderId' => $order->order_id]);

        } catch (\Exception $e) {
            Log::error('Order creation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'input_data' => $request->except(['g-recaptcha-response', '_token'])
            ]);

            return back()
                ->with('error', 'Произошла ошибка при создании заказа')
                ->withInput();
        }
    }

    public function updateState($orderId, $stateId)
    {
        $orderService = OrderService::make();
        return $orderService->updateState($orderId, $stateId);
    }

    // Для AJAX-запросов
    public function storeAjax(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_id' => 'required|exists:products,id',
            'email' => 'required|email|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'birth_time' => 'required',
            'birth_city' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $product = Product::findOrFail($request->product_id);
            $expiresAt = now()->addMinutes((int)config('robokassa.wait_time'))->setTimezone('UTC');
            
            $order = Order::create([
                'order_id' => (string) Str::uuid(),
                'email' => $request->email,
                'gender' => $request->gender,
                'birth_date' => $request->birth_date,
                'birth_time' => $request->birth_time,
                'birth_city' => $request->birth_city,
                'product_id' => $request->product_id,
                'amount' => $product->price,
                'status' => 'new',
                'expires_at' => $expiresAt
            ]);

            // Отправляем email с ссылкой на оплату
            Mail::to($order->email)->send(new OrderCreatedNotification($order));

            return response()->json([
                'success' => true,
                'order_id' => $order->id
            ]);

        } catch (\Exception $e) {
            Log::error('Order creation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при создании заказа'
            ], 500);
        }
    }
}

