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
                    <h1 class="text-2xl font-bold mb-4">Daftar Karya</h1>

                    <table class="min-w-full mt-4 border border-gray-300">
                        <thead>
                            <tr>
                                <th class="border border-gray-300 px-4 py-2">Judul Karya</th>
                                <th class="border border-gray-300 px-4 py-2">Deskripsi</th>
                                <th class="border border-gray-300 px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($karyaList as $karya)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $karya->judul }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $karya->deskripsi }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="{{ route('dosen.karya.show', $karya->id) }}"
                                            class="text-blue-500">Detail</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
