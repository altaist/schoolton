<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <!--link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet"-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Prosto+One&display=swap" rel="stylesheet">

        <script src="https://telegram.org/js/telegram-web-app.js"></script>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/pages/{$page['component']}.vue"])
        @inertiaHead
        <link href="dist/css/main.css" rel="stylesheet">
    </head>
    <body class="antialiased">
        @inertia
        <!-- back to top -->
  <a href="#wrapper" data-type="section-switch" class="scrollup"><i class="bi bi-caret-up"></i></a>

<!-- Bootstrap Bundle with Popper -->
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/color-modes.js"></script>
<script src="dist/js/owl.carousel.min.js"></script>
<script src="dist/js/aos.js"></script>
<script src="dist/js/main.js"></script>
    </body>
</html>
