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
                    <h1 class="text-2xl font-bold mb-4">Daftar Karya Saya</h1>

                    <table class="min-w-full border">
                        <thead>
                            <tr>
                                <th class="border">Judul</th>
                                <th class="border">Deskripsi</th>
                                <th class="border">Kategori</th>
                                <th class="border">Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyaList as $karya)
                                <tr>
                                    <td class="border">{{ $karya->judul }}</td>
                                    <td class="border">{{ $karya->deskripsi }}</td>
                                    <td class="border">{{ $karya->kategori }}</td>
                                    <td class="border"><img src="{{ asset('storage/' . $karya->gambar) }}"
                                            alt="Gambar Karya" class="w-16 h-16"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
