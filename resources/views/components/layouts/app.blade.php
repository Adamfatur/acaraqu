<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AcaraQu') }} - @yield('title', 'Modern Integrated Event & Digital Solutions')</title>
    <meta name="description"
        content="@yield('meta_description', 'AcaraQu - Solusi lengkap kebutuhan acara dan digital. Mulai dari dokumentasi Galeri, buku tamu Hadirku, souvenir Seniku, hingga pengembangan software ITku.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-white text-slate-800 selection:bg-blue-chill selection:text-white">
    <div class="min-h-screen flex flex-col">
        @include('layouts.navigation')

        <main class="flex-grow">
            {{ $slot }}
        </main>

        @include('layouts.footer')

        <x-scroll-to-top />
        <x-whatsapp-float />
    </div>
</body>

</html>