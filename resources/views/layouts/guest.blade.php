<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="w-full min-h-screen flex">
            <div class="min-h-screen w-1/2 flex flex-col items-center justify-center rounded-r-[35px]" style="background-color: #697899;">
                <h1 class="text-white text-5xl">Let's Start Learn With</h1>
                <a href="/">
                    <img src="{{url('/Logo.png')}}" alt="logo" />
                </a>
            </div>

            <div class="flex flex-col justify-center w-1/2 px-40">
                <div class="mb-24">
                    <h1 class="text-5xl font-extrabold" style="color:#697899;">Sign In to </h1>
                    <h1 class="text-5xl font-extrabold" style="color:#697899;">Frame<span style="color:#F6B21B;">Acade</span></h1>
                </div>
                <div class="w-full">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
