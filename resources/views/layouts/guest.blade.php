<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Page | Karya Kita</title>
    <link rel="icon" type="image/png" href="img/logo.png"> <!-- Perbaiki type menjadi image/png -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            background-image: url('img/bg.png'); /* Ganti dengan path yang benar */
            background-size: cover; /* Menutupi seluruh area */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            position: relative; /* Untuk menempatkan overlay di atasnya */
            overflow: hidden; /* Untuk menghindari scroll bar */
        }

        /* Mengatur efek blur hanya pada latar belakang */
        .background-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('img/bg.png');
            background-size: cover; 
            background-position: center; 
            filter: blur(3px); /* Efek blur pada latar belakang */
            z-index: 0; /* Di bawah semua elemen */
        }

        /* Overlay gradient */
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, #670000, #7e4a19);
            opacity: 0.8; /* Gelap dengan transparansi */
            z-index: 1; /* Di atas blur */
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent relative"> <!-- bg-transparent untuk menghindari pengaruh warna latar belakang -->

        <!-- Background Blur -->
        <div class="background-blur"></div>

        <!-- Gradient Layer -->
        <div class="gradient-overlay"></div>

        <!-- Kontainer Form -->
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-lg overflow-hidden sm:rounded-xl h-[550px] flex flex-col items-center justify-center relative z-10">
            <!-- Logo -->
            <div class="relative z-20 mb-2"> <!-- Tambahkan margin bawah untuk jarak dengan teks -->
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 130px; height: 130px;" />
                </a>
            </div>
            <!-- Teks Masuk -->
            <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">{{ __('Masuk') }}</h2> <!-- Menambahkan teks "Masuk" -->

            <div class="w-full"> <!-- Konten form -->
                {{ $slot }}
            </div>
        </div>
    </div>
</body>
</html>
