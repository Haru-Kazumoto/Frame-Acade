<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ini adalah contoh halaman dengan tag meta">
    <meta name="keywords" content="contoh, tag, meta, HTML">
    <meta name="author" content="Nama Penulis">
    <meta property="og:title" content="Frame Acade"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="Ini adalah contoh halaman dengan tag meta untuk sosial media" />
    <meta property="og:url" content="http://54.84.223.231:8000/login" />
    {{-- <meta property="og:image" content="link_gambar.jpg"> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" href="/image/logo.png">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="w-full min-h-screen flex">
        {{ $slot }}
    </div>
</body>

</html>
