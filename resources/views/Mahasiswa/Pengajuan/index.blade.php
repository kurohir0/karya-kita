<!-- resources/views/mahasiswa/pengajuan/index.blade.php -->

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

            <main>
                <div class="container">
                    <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan Karya</h1>

                    @if (session('success'))
                        <div class="bg-green-500 text-white p-3 mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <a href="{{ route('mahasiswa.pengajuan.create') }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded">Buat Pengajuan</a>

                    @if ($pengajuanList->isEmpty())
                        <p class="mt-4">Tidak ada pengajuan yang perlu ditampilkan.</p>
                    @else
                        <table class="min-w-full mt-4 border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="border border-gray-300 px-4 py-2">Judul Karya</th>
                                    <th class="border border-gray-300 px-4 py-2">Status</th>
                                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengajuanList as $pengajuan)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $pengajuan->judul }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $pengajuan->status }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <a href="{{ route('mahasiswa.pengajuan.show', $pengajuan->id) }}"
                                                class="text-blue-500">Detail</a>
                                            <form action="{{ route('mahasiswa.pengajuan.destroy', $pengajuan->id) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-500">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
