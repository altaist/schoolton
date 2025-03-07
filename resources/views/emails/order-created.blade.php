<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ваш заказ #{{ $order->display_id }} создан</h2>
        
        <p>Благодарим вас за заказ!</p>
        
        
        <p>Детали:</p>
        <ul>
            <li>Тип: {{ \App\Models\Product::find($order->product_id)->title }}.</li>
            <li>Номер заказа: {{ $order->display_id }}</li>
            <li>Дата рождения: {{ $order->birth_date }}</li>
            <li>Время рождения: {{ $order->birth_time }}</li>
            <li>Место рождения: {{ $order->birth_city }}</li>
            <li>Сумма: {{ number_format($order->amount, 0, '.', ' ') }} ₽</li>
        </ul>
        
        <p>Для оплаты заказа перейдите по ссылке ниже:</p>
        
        <a href="{{ route('order.show', ['orderId' => $order->order_id]) }}" class="button">Оплатить заказ</a>
        
        <p>Ссылка действительна в течение {{ config('robokassa.wait_time') }} минут.</p>
        
        <p>Если у вас возникнут вопросы, пожалуйста, свяжитесь с нами по адресу info@natalnayakarta.store</p>
        
        <p>С уважением,<br>
        Команда Natalnayakarta.store</p>
    </div>
</body>
</html>