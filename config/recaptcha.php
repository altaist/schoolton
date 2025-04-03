<?php

return [
    /*
    |--------------------------------------------------------------------------
    | reCAPTCHA Настройки
    |--------------------------------------------------------------------------
    |
    | Настройки для интеграции Google reCAPTCHA в приложение.
    |
    */

    'site_key' => env('RECAPTCHA_SITE_KEY'),
    'secret_key' => env('RECAPTCHA_SECRET_KEY'),
    'test_mode' => env('RECAPTCHA_TEST_MODE', true),
]; 