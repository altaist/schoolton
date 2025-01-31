<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentSuccessController extends Controller
{
    public function show(Request $request)
    {
        // Логируем входящий запрос
        Log::info('Payment success page accessed', [
            'params' => $request->all(),
            'ip' => $request->ip()
        ]);

        // Получаем параметры
        $out_sum = $request->input('OutSum');
        $inv_id = $request->input('InvId');
        $signature_value = $request->input('SignatureValue');

        // Проверяем подпись
        $is_test = config('robokassa.test_mode');
        $password_1 = $is_test ? config('robokassa.test_password_1') : config('robokassa.password_1');
        
        $signature_check = strtoupper(md5("$out_sum:$inv_id:$password_1"));

        if ($signature_check !== strtoupper($signature_value)) {
            Log::error('Invalid signature on success page', [
                'received' => $signature_value,
                'calculated' => $signature_check,
                'inv_id' => $inv_id
            ]);
            abort(400, 'Invalid signature');
        }

        // Находим заказ
        $order = Order::findOrFail($inv_id);

        // Возвращаем страницу ожидания
        return view('payment.waiting', [
            'order' => $order,
            'inv_id' => $inv_id
        ]);
    }

    public function checkStatus(Request $request, $inv_id)
    {
        $order = Order::findOrFail($inv_id);
        
        return response()->json([
            'status' => $order->status,
            'redirect_url' => $order->status === 'paid' ? route('order.show', ['orderId' => $order->order_id]) : null
        ]);
    }
} 