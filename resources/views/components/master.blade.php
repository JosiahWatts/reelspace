<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto border-b border-b-gray-600 flex justify-between items-center">
                <h1 class="font-black pb-3 text-3xl ">
                    📽️ReelSpace
                </h1>
                <div>
                    @auth
                        <h2 class="text-lg font-bold mr-2">Hey, {{ auth()->user()->name }} 👋</h2>
                    @else
                        <a href="/login" class="text-lg font-bold mr-2">Login</a>
                        <a href="/register" class="text-lg font-bold">Register</a>
                    @endauth 
                </div>
            </header>
        </section>

        {{ $slot }}
    </div>
</body>
</html>
