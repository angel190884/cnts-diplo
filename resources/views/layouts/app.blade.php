<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            @include('partials/top-menu')
        </nav>
        <main class="py-4">
            @include('partials.errors')
            @include('partials.messages')
            @yield('content')
        </main>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2018 ADX software SA de CV</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="{{ route('privacy') }}">Privacy</a></li>
                <li class="list-inline-item"><a href="{{ route('terms') }}">Terms</a></li>
                <li class="list-inline-item"><a href="{{ route('support') }}">Support</a></li>
            </ul>
        </footer>
    </div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script id="dsq-count-scr" src="//cnts-1.disqus.com/count.js" async></script>
</body>
</html>
