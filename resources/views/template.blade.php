<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
    <title>
        @yield('title')
    </title>
</head>
<body>
    <div class="container px-4 mx-auto my-0">
        @yield('header-dash')


        @yield('content')


        <p class="py-16 ">
            <img src="{{ asset('images/elefante.png') }}" class="h-12 mx-auto" />
        </p>

    </div>
</body>
</html>
