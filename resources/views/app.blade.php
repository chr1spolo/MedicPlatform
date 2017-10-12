<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scallable=no">
        <title> TUSALUD - TU INFORME MÉDICO </title>
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
        @yield('custCss')
    </head>
    <body @yield('bodyColor')>

        @yield('navbar')
        <div class="uk-section" style="padding:0;">
            @yield('main')
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
        @yield('custJS')
    </body>
</html>