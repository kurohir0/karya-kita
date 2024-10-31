<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- title --}}
    @yield('title')

    {{-- style --}}
    @yield('style')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .gallery-image {
            transition: transform 0.3s;
        }

        .gallery-image:hover {
            transform: scale(1.05);
        }
    </style>
</head>

<body class="h-full">
    {{-- Navbar --}}
    @include('layouts.nav')

    {{-- content --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- script --}}
    @yield('script')

</body>

</html>
