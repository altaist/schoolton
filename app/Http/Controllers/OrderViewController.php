<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class OrderViewController extends Controller
{
    public function show($orderId)
    {
        $order = Order::where('order_id', $orderId)->firstOrFail();
        
        // Если заказ уже истек, сразу редиректим на главную
        if ($order->status === 'new' && $order->expires_at->isPast()) {
            return redirect('/');
        }
        
        return view('order', compact('order'));
    }

    public function update(Request $request, $orderId)
    {
        $order = Order::where('order_id', $orderId)->firstOrFail();
        
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
            $order->update([
                'email' => $request->email,
                'gender' => $request->gender,
                'birth_date' => $request->birth_date,
                'birth_time' => $request->birth_time,
                'birth_city' => $request->birth_city,
            ]);

            return response()->json([
                'success' => true
            ]);
        } catch (\Exception $e) {
            Log::error('Order update error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Произошла ошибка при обновлении данных'
            ], 500);
        }
    }
} 