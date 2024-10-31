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
                <div class="container">
                    <h1 class="text-2xl font-bold mb-4">Detail Pengajuan</h1>

                    <h2 class="text-xl font-bold">{{ $pengajuan->karya->judul }}</h2>
                    <p><strong>Deskripsi Karya:</strong> {{ $pengajuan->karya->deskripsi }}</p>
                    <p><strong>Pengaju:</strong> {{ $pengajuan->user->name }}</p>
                    <p><strong>Status:</strong> {{ $pengajuan->status }}</p>

                    <a href="{{ route('admin.pengajuan.index') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded mt-4 inline-block">Kembali</a>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
