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
        // Проверяем, что запрос пришел с нашего сайта
        if (!$request->session()->has('form_access_token')) {
            Log::error('Unauthorized form access attempt', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent()
            ]);
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized access'
            ], 403);
        }

        // Проверяем время жизни токена (например, 30 минут)
        $tokenTime = $request->session()->get('form_access_time');
        if (now()->diffInMinutes($tokenTime) > 30) {
            $request->session()->forget(['form_access_token', 'form_access_time']);
            return response()->json([
                'success' => false,
                'message' => 'Form session expired'
            ], 403);
        }

        Log::info('Received order request', [
            'data' => $request->all()
        ]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'birth_time' => 'required',
            'birth_city' => 'required|string|max:255',
            'honeypot' => 'size:0', // Добавляем поле-ловушку
        ]);

        if ($validator->fails()) {
            Log::error('Order validation failed', [
                'errors' => $validator->errors()->toArray()
            ]);
            
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $expiresAt = now()->addMinutes((int)config('robokassa.wait_time'))->setTimezone('UTC');
            
            $order = Order::create([
                'order_id' => (string) Str::uuid(),
                'email' => $request->email,
                'gender' => $request->gender,
                'birth_date' => $request->birth_date,
                'birth_time' => $request->birth_time,
                'birth_city' => $request->birth_city,
                'amount' => (float)config('robokassa.order_price'),
                'status' => 'new',
                'expires_at' => $expiresAt
            ]);

            Mail::to($order->email)->send(new OrderCreatedNotification($order));

            Log::info('Order created successfully', [
                'order_id' => $order->id,
                'uuid' => $order->order_id,
                'email_sent' => true
            ]);

            // После успешного создания заказа удаляем токен доступа
            $request->session()->forget(['form_access_token', 'form_access_time']);

            return redirect()->route('order.show', ['orderId' => $order->order_id]);

        } catch (\Exception $e) {
            Log::error('Order creation error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
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
            $expiresAt = now()->addMinutes((int)config('robokassa.wait_time'))->setTimezone('UTC');
            
            $order = Order::create([
                'order_id' => (string) Str::uuid(),
                'email' => $request->email,
                'gender' => $request->gender,
                'birth_date' => $request->birth_date,
                'birth_time' => $request->birth_time,
                'birth_city' => $request->birth_city,
                'amount' => (float)config('robokassa.order_price'),
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

