<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
}
