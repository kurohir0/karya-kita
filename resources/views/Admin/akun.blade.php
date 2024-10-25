<x-app-layout>
    <div x-data="{ open: false }" class="flex h-screen">
        <!-- Sidebar -->
        <div :class="{ 'block': open, 'hidden': !open }"
            class="w-64 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 transition-transform duration-300 sm:block">
            @include('layouts.sidebar')
        </div>

        <!-- Main Content -->
        <div class="flex-1 bg-gray-100 dark:bg-gray-900">
            <!-- Top Bar -->
            @include('layouts.header')

            <!-- Konten Utama -->
            <main>
                <div class="p-6">
                    <!-- Kotak di sekitar konten -->
                    <div
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs">
                        <h1 class="text-2xl font-semibold mb-2">
                            {{ __('Selamat Datang di Halaman Akun!') }}</h1>
                        <hr>
                        <p class="mt-2">
                            {{ __('Ini adalah tempat di mana Anda bisa melihat informasi terkait akun yang tersedia.') }}
                        </p>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
