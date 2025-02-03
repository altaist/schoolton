<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .order-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
        table {
            width: 100%;
            margin: 20px 0;
        }
        td {
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ваш заказ успешно создан</h2>
        
        <div class="order-info">
            <table>
                <tr>
                    <td><strong>Номер заказа:</strong></td>
                    <td>{{ $order->order_id }}</td>
                </tr>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>{{ $order->email }}</td>
                </tr>
                <tr>
                    <td><strong>Пол:</strong></td>
                    <td>{{ $order->gender === 'male' ? 'Мужской' : 'Женский' }}</td>
                </tr>
                <tr>
                    <td><strong>Дата рождения:</strong></td>
                    <td>{{ \Carbon\Carbon::parse($order->birth_date)->format('d.m.Y') }}</td>
                </tr>
                <tr>
                    <td><strong>Время рождения:</strong></td>
                    <td>{{ \Carbon\Carbon::parse($order->birth_time)->format('H:i') }}</td>
                </tr>
                <tr>
                    <td><strong>Место рождения:</strong></td>
                    <td>{{ $order->birth_city }}</td>
                </tr>
                <tr>
                    <td><strong>Сумма:</strong></td>
                    <td>{{ number_format(config('robokassa.order_price'), 0, '.', ' ') }} ₽</td>
                </tr>
            </table>
        </div>

        <div class="row mt-4">
                <div class="col-12 text-center">
        <a href="{{ route('robokassa.payment.form', $order->order_id) }}" class="btn" style="background: #28a745;">Оплатить заказ</a>
                </div>
        </div>

        <p>Для просмотра деталей заказа перейдите по ссылке:</p>
        <a href="{{ route('orders.show', $order->order_id) }}" class="btn">Просмотреть заказ</a>

        <p>Если у вас возникли вопросы, пожалуйста, свяжитесь с нами.</p>

        <p>С уважением,<br>
        Команда Natalnayakarta.store</p>
    </div>
</body>
</html> 