<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваш заказ - {{ $order->id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body { background: #1a1a1a; color: white; }
        .order-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 2rem;
            margin-top: 2rem;
        }
        .timer { color: #ff4d4d; font-size: 1.2rem; font-weight: bold; }
        .table { color: white; }
        .table td { border-color: rgba(255, 255, 255, 0.1); }
        .modal-content {
            background: #2a2a2a;
            color: white;
        }
        .modal-header { border-bottom-color: rgba(255, 255, 255, 0.1); }
        .modal-footer { border-top-color: rgba(255, 255, 255, 0.1); }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.2);
            color: white;
        }
        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.3);
            color: white;
            box-shadow: none;
        }
        .toast-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1050;
        }
        .toast {
            background: rgba(25, 135, 84, 0.9);
            color: white;
            border: none;
            backdrop-filter: blur(10px);
        }
        .toast-body {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="order-container">
            <div class="row mb-4">
                <div class="col-12">
                    <h2>Ваш заказ создан</h2>
                    @if($order->status === 'paid')
                        <div class="alert alert-success">
                            <h4 class="mb-3">Заказ принят в работу</h4>
                            <p>Спасибо за оплату! Ваша натальная карта будет отправлена на email {{ $order->email }} в течение 24 часов.</p>
                        </div>
                    @else
                        <div class="timer-container mb-4">
                            <p>Время до отмены заказа: <span id="timer">...</span></p>
                        </div>

                        <div class="mb-4">
                            <a href="{{ route('order.edit', $order->order_id) }}" class="btn btn-primary">
                                Изменить данные
                            </a>
                        </div>

                        @include('partials.payment-form')
                    @endif
                </div>
            </div>

            <div class="row" id="orderData">
                <div class="col-12">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Номер заказа:</td>
                                <td>{{ $order->id }}</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ $order->email }}</td>
                            </tr>
                            <tr>
                                <td>Пол:</td>
                                <td>{{ $order->gender === 'male' ? 'Мужской' : 'Женский' }}</td>
                            </tr>
                            <tr>
                                <td>Дата рождения:</td>
                                <td>{{ $order->birth_date }}</td>
                            </tr>
                            <tr>
                                <td>Время рождения:</td>
                                <td>{{ $order->birth_time }}</td>
                            </tr>
                            <tr>
                                <td>Место рождения:</td>
                                <td>{{ $order->birth_city }}</td>
                            </tr>
                            <tr>
                                <td>Сумма:</td>
                                <td>1 499 ₽</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex gap-2 mb-4">
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#editModal">
                            Изменить данные
                        </button>
                        <button class="btn btn-secondary" onclick="copyOrderLink()">
                            Скопировать ссылку на заказ
                        </button>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12 text-center">
                    <?php
                    $merchant_login = config('robokassa.merchant_login');
                    $is_test = config('robokassa.test_mode');
                    $password_1 = $is_test ? config('robokassa.test_password_1') : config('robokassa.password_1');
                    $payment_url = config('robokassa.payment_url');
                    $order_price = config('robokassa.order_price');
                    
                    $invid = $order->id;
                    $description = "Заказ натальной карты №{$order->id}";
                    $signature_value = md5("$merchant_login:$order_price:$invid:$password_1");
                    
                    $payment_url .= "?" . http_build_query([
                        'MerchantLogin' => $merchant_login,
                        'OutSum' => $order_price,
                        'InvoiceID' => $invid,
                        'Description' => $description,
                        'SignatureValue' => $signature_value,
                        'IsTest' => $is_test ? 1 : 0,
                        'SuccessURL' => route('payment.success')
                    ]);
                    ?>
                    <button class="btn btn-primary btn-lg px-5 py-3" 
                            onclick="window.location.href='<?php echo $payment_url; ?>'" 
                            style="background: linear-gradient(45deg, #2b5876, #4e4376); border: none; font-size: 1.2rem; font-weight: 600; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                        <i class="bi bi-credit-card me-2"></i>
                        Оплатить <?php echo number_format($order_price, 2, ',', ' '); ?> ₽
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Добавляем контейнер для уведомлений -->
    <div class="toast-container">
        <div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true" id="copyToast">
            <div class="d-flex">
                <div class="toast-body">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    Ссылка скопирована!
                </div>
            </div>
        </div>
    </div>

    <!-- Модальное окно редактирования -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Изменение данных заказа</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="updateOrderForm">
                        @csrf
                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email*</label>
                            <input type="email" class="form-control" id="editEmail" name="email" value="{{ $order->email }}" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Пол*</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="editGenderMale" value="male" {{ $order->gender === 'male' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="editGenderMale">
                                        Мужской
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="editGenderFemale" value="female" {{ $order->gender === 'female' ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="editGenderFemale">
                                        Женский
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="editBirthDate" class="form-label">Дата рождения*</label>
                            <input type="date" class="form-control" id="editBirthDate" name="birth_date" value="{{ $order->birth_date }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="editBirthTime" class="form-label">Время рождения*</label>
                            <input type="time" class="form-control" id="editBirthTime" name="birth_time" value="{{ $order->birth_time }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="editBirthCity" class="form-label">Место рождения*</label>
                            <input type="text" class="form-control" id="editBirthCity" name="birth_city" value="{{ $order->birth_city }}" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary" onclick="updateOrder()">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Передаем время истечения в JavaScript в формате timestamp
        window.orderExpiresAt = {{ $order->expires_at->timestamp * 1000 }};

        function startTimer() {
            function updateTimer() {
                const now = Date.now();
                const timeLeft = window.orderExpiresAt - now;

                if (timeLeft <= 0) {
                    document.querySelector('#timer').textContent = '00:00';
                    if ('{{ $order->status }}' === 'new') {
                        window.location.href = '/';
                    }
                    return;
                }

                const minutes = Math.floor(timeLeft / (1000 * 60));
                const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                document.querySelector('#timer').textContent = 
                    (minutes < 10 ? '0' : '') + minutes + ':' + 
                    (seconds < 10 ? '0' : '') + seconds;
            }

            updateTimer();
            setInterval(updateTimer, 1000);
        }

        function updateOrder() {
            let formData = new FormData(document.getElementById('updateOrderForm'));
            
            fetch('/order/{{ $order->order_id }}/update', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    location.reload();
                } else {
                    alert('Произошла ошибка при обновлении данных');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Произошла ошибка при обновлении данных');
            });
        }

        function copyOrderLink() {
            const url = window.location.href;
            navigator.clipboard.writeText(url).then(() => {
                const toast = new bootstrap.Toast(document.getElementById('copyToast'), {
                    delay: 2000
                });
                toast.show();
            }).catch(err => {
                console.error('Ошибка копирования: ', err);
            });
        }

        window.onload = function() {
            startTimer();
        };
    </script>
</body>
</html> 