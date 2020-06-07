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
    
    @livewireStyles
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto flex justify-between items-center">
                <div class="flex items-center">
                    <h1 class="font-black pb-3 text-3xl ">
                        📽️ ReelSpace
                    </h1>
                    <div class="ml-8 text-md font-bold mb-2">
                        <ul class="flex items-center">
                            <li class="px-2">
                                <a href="/explore">Explore Spaces</a>
                            </li>
                            <li class="px-2">
                                <a href="/spaces">My Spaces</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
    
    @livewireScripts
</body>
</html>
