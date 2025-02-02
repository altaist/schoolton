<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Заказ #{{ $order->display_id }} оплачен</h2>
        
        <p>Ваш заказ #{{ $order->display_id }} успешно оплачен и принят в работу.</p>
        
        <p>Натальная карта будет отправлена на этот email в течение 24 часов.</p>

        <p>Если у вас возникнут вопросы, пожалуйста, свяжитесь с нами.</p>

        <p>С уважением,<br>
        Команда Natalnayakarta.store</p>
    </div>
</body>
</html> 