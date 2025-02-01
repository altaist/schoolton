<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NatalOrder;
use App\Mail\OrderFileEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendFile(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:natal_orders,id',
            'email' => 'required|email',
            'file' => 'required|file'
        ]);

        $order = NatalOrder::findOrFail($request->order_id);
        $file = $request->file('file');
        
        // Сохраняем файл
        $path = $file->store('order_files');
        
        // Отправляем email
        Mail::to($request->email)->send(new OrderFileEmail($order, $path));
        
        return redirect()->back()->with('success', 'Файл успешно отправлен');
    }
} 