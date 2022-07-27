<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/app.js') }}" defer></script>
    @yield('script-header')


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/all.css') }}" rel="stylesheet">
    @yield('style')
    
    <!-- Modal -->
    <style>
        .modal {
            transition: opacity 0.25s ease;
        }
        body.modal-active {
            rflow-x: hidden;
            overflow-y: visible !important;
        }
    </style>

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/trix/trix.css') }}">
    <script type="text/javascript" src="{{ asset('assets/trix/trix.js') }}"></script>
</head>
<body>
    <div class="app">
        @yield('app')
    </div>
    @yield('script-footer')

    <script src="{{ asset('assets/js/modal.js') }}"></script>
</body>
</html>
