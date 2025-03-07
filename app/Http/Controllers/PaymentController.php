<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderPaidNotification;

class PaymentController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order_id' => 'required|exists:orders,id',
            'sum' => 'required'
        ]);

        $validated = $validator->validate();

        $payment = Payment::create($validated);
        return response()->json($payment);
    }

    public function completePayment(Order $order, $sum)
    {
        $order->paid_at = now();
        $order->save();
        $payment = Payment::create([
            'order_id' => $order->id,
            'sum' => $sum,
        ]);
        return response()->json(['order' => $order, 'payment' => $payment]);
    }

    public function handlePayment(Request $request)
    {
        // Отключаем вывод HTML при ошибках
        config(['app.debug' => false]);
        
        // Логируем входящий запрос
        Log::channel('daily')->info('Payment notification received', [
            'method' => $request->method(),
            'ip' => $request->ip(),
            'data' => $request->all()
        ]);

        try {
            $out_sum = $request->input('OutSum');
            $inv_id = $request->input('InvId');
            $signature_value = $request->input('SignatureValue');

            // Проверяем подпись
            $is_test = config('robokassa.test_mode');
            $password_2 = $is_test ? config('robokassa.test_password_2') : config('robokassa.password_2');
            
            $signature_check = strtoupper(md5("$out_sum:$inv_id:$password_2"));

            if ($signature_check !== strtoupper($signature_value)) {
                Log::channel('daily')->error('Invalid signature', [
                    'received' => $signature_value,
                    'calculated' => $signature_check
                ]);
                return response("bad sign\n", 400);
            }

            // Находим и обновляем заказ
            $order = Order::find($inv_id);
            if (!$order) {
                Log::channel('daily')->error('Order not found', ['inv_id' => $inv_id]);
                return response("Order not found\n", 404);
            }

            $order->update([
                'status' => 'paid'
            ]);

            // Проверяем тестовый режим перед отправкой письма
            if (!config('robokassa.test_mode')) {
                Mail::to($order->email)->send(new OrderPaidNotification($order));
            }

            Log::channel('daily')->info('Payment processed successfully', [
                'order_id' => $inv_id,
                'email_sent' => !config('robokassa.test_mode')
            ]);

            return response("OK$inv_id\n");

        } catch (\Exception $e) {
            Log::channel('daily')->error('Payment processing error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            return response("Internal error\n", 500);
        }
    }
}
