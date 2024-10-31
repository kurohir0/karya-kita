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
                    <h1 class="text-2xl font-bold mb-4">Detail Pengajuan Karya</h1>

                    <div class="mb-4">
                        <strong>Judul Karya:</strong>
                        <p>{{ $pengajuan->karya->judul }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Deskripsi:</strong>
                        <p>{{ $pengajuan->karya->deskripsi }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Kategori:</strong>
                        <p>{{ $pengajuan->karya->kategori }}</p>
                    </div>

                    <div class="mb-4">
                        <strong>Status:</strong>
                        <p>{{ $pengajuan->status }}</p>
                    </div>

                    <a href="{{ route('mahasiswa.pengajuan.index') }}" class="text-blue-500">Kembali</a>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
