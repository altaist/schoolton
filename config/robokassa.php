<?php

return [
    'merchant_login' => env('ROBOKASSA_MERCHANT_LOGIN'),
    'password_1' => env('ROBOKASSA_PASSWORD_1'),
    'password_2' => env('ROBOKASSA_PASSWORD_2'),
    'test_password_1' => env('ROBOKASSA_TEST_PASSWORD_1'),
    'test_password_2' => env('ROBOKASSA_TEST_PASSWORD_2'),
    'test_mode' => env('ROBOKASSA_TEST_MODE', true),
    'payment_url' => env('ROBOKASSA_PAYMENT_URL', 'https://auth.robokassa.ru/Merchant/Index.aspx'),
    'order_price' => env('ORDER_PRICE', 1500.00),
    'wait_time' => env('ORDER_WAIT_TIME', 20), // время в минутах
]; 