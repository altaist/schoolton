<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderFileEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $filePath;

    public function __construct($order, $filePath)
    {
        $this->order = $order;
        $this->filePath = $filePath;
    }

    public function build()
    {
        return $this->view('emails.order-file')
                    ->subject('Ваш заказ #' . $this->order->id . ' готов')
                    ->attach(storage_path('app/' . $this->filePath));
    }
} 