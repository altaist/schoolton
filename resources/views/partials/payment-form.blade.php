@php
    $merchant_login = config('robokassa.merchant_login');
    $password_1 = config('robokassa.test_mode') ? config('robokassa.test_password_1') : config('robokassa.password_1');
    $is_test = config('robokassa.test_mode') ? 1 : 0;
    
    $order_price = number_format($order->amount, 2, '.', '');
    $signature_value = md5("$merchant_login:$order_price:$order->id:$password_1");
@endphp
