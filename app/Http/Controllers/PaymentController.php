<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

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
        // Логируем входящий запрос 
        Log::info('Received payment notification', [
            'ip' => $request->ip(),
            'all_params' => $request->all()
        ]);

        // Получаем параметры
        $out_sum = $request->input('OutSum');
        $inv_id = $request->input('InvId');
        $signature_value = $request->input('SignatureValue');
        $email = $request->input('EMail');
        $fee = $request->input('Fee');
        $payment_method = $request->input('PaymentMethod');

        // Логируем основные параметры
        Log::info('Payment parameters', [
            'out_sum' => $out_sum,
            'inv_id' => $inv_id,
            'signature' => $signature_value,
            'email' => $email,
            'fee' => $fee,
            'payment_method' => $payment_method
        ]);

        // Получаем пароль в зависимости от режима (тестовый/боевой)
        $is_test = config('robokassa.test_mode');
        $password_2 = $is_test ? config('robokassa.test_password_2') : config('robokassa.password_2');

        // Формируем подпись для проверки
        $signature_check = strtoupper(md5("$out_sum:$inv_id:$password_2"));

        // Логируем проверку подписи
        Log::info('Signature verification', [
            'received_signature' => $signature_value,
            'calculated_signature' => $signature_check,
            'is_test_mode' => $is_test
        ]);

        // Проверяем подпись
        if ($signature_check !== strtoupper($signature_value)) {
            Log::error('Payment signature verification failed', [
                'received' => $signature_value,
                'calculated' => $signature_check,
                'inv_id' => $inv_id,
                'out_sum' => $out_sum
            ]);
            return response('Signature verification failed', 400);
        }

        try {
            // Находим заказ
            $order = Order::findOrFail($inv_id);

            Log::info('Found order', [
                'order_id' => $order->id,
                'order_uuid' => $order->order_id,
                'current_status' => $order->status,
                'order_amount' => $order->amount
            ]);

            // Проверяем сумму
            if ((float)$out_sum !== (float)$order->amount) {
                Log::error('Payment amount mismatch', [
                    'order_id' => $inv_id,
                    'expected' => $order->amount,
                    'received' => $out_sum,
                    'difference' => (float)$order->amount - (float)$out_sum
                ]);
                return response('Amount mismatch', 400);
            }

            // Логируем перед обновлением
            Log::info('Updating order status', [
                'order_id' => $inv_id,
                'old_status' => $order->status,
                'new_status' => 'paid'
            ]);

            // Обновляем статус заказа
            $order->update([
                'status' => 'paid',
                'payment_method' => $payment_method,
                'payment_fee' => $fee,
                'payer_email' => $email
            ]);

            // Логируем успешное обновление
            Log::info('Order successfully updated', [
                'order_id' => $inv_id,
                'new_status' => 'paid',
                'payment_details' => [
                    'method' => $payment_method,
                    'fee' => $fee,
                    'email' => $email
                ]
            ]);

            // Возвращаем ответ в формате OK{$inv_id}
            $response = "OK$inv_id";
            Log::info('Sending response to Robokassa', [
                'response' => $response
            ]);
            
            return response($response);

        } catch (\Exception $e) {
            Log::error('Payment processing error', [
                'order_id' => $inv_id,
                'error_message' => $e->getMessage(),
                'error_trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);
            return response('Internal error', 500);
        }
    }
}
