@php
    $merchant_login = config('robokassa.merchant_login');
    $password_1 = config('robokassa.test_mode') ? config('robokassa.test_password_1') : config('robokassa.password_1');
    $is_test = config('robokassa.test_mode') ? 1 : 0;
    
    $order_price = number_format($order->amount, 2, '.', '');
    $signature_value = md5("$merchant_login:$order_price:$order->id:$password_1");
@endphp

<form action="https://auth.robokassa.ru/Merchant/Index.aspx" method="GET">
    <input type="hidden" name="MerchantLogin" value="{{ $merchant_login }}">
    <input type="hidden" name="OutSum" value="{{ $order_price }}">
    <input type="hidden" name="InvId" value="{{ $order->id }}">
    <input type="hidden" name="Description" value="Оплата заказа #{{ $order->id }}">
    <input type="hidden" name="SignatureValue" value="{{ $signature_value }}">
    <input type="hidden" name="IsTest" value="{{ $is_test }}">
    
    <button type="submit" class="btn btn-primary">
        Оплатить {{ $order_price }} руб.
    </button>
</form> 