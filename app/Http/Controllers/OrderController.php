<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Market\OrderService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Mail\OrderCreated;
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
        Log::info('Received order request', [
            'data' => $request->all()
        ]);

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'gender' => 'required|in:male,female',
            'birth_date' => 'required|date',
            'birth_time' => 'required',
            'birth_city' => 'required|string|max:255',
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

            Log::info('Order created successfully', [
                'order_id' => $order->id,
                'uuid' => $order->order_id
            ]);

            // Отправляем письмо
            Mail::to($order->email)->send(new OrderCreated($order));

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

}
