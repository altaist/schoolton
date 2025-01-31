<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ожидание подтверждения оплаты</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { 
            background: #1a1a1a; 
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .spinner {
            width: 100px;
            height: 100px;
            border: 8px solid rgba(255, 255, 255, 0.1);
            border-left-color: #fff;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
        .waiting-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 3rem;
            max-width: 600px;
            margin: 2rem;
        }
    </style>
</head>
<body>
    <div class="waiting-container">
        <div class="spinner mx-auto mb-4"></div>
        <h2 class="mb-4">Ожидание подтверждения оплаты</h2>
        <p class="mb-3">Пожалуйста, не закрывайте эту страницу.</p>
        <p class="text-muted">Заказ №{{ $inv_id }}</p>
    </div>

    <script>
        function checkPaymentStatus() {
            fetch('/payment/check-status/{{ $inv_id }}')
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    console.log(data.status);
                    if (data.status === 'paid' && data.redirect_url) {
                        window.location.href = data.redirect_url;
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        // Проверяем статус каждые 3 секунды
        setInterval(checkPaymentStatus, 3000);
    </script>
</body>
</html> 