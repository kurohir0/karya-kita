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
                    <h1 class="text-2xl font-bold mb-4">Daftar Pengajuan</h1>

                    @if (session('success'))
                        <div class="bg-green-500 text-white p-3 mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($pengajuanList->isEmpty())
                        <p class="text-gray-600">Tidak ada pengajuan yang tersedia.</p>
                    @else
                        <table class="min-w-full border">
                            <thead>
                                <tr>
                                    <th class="border">Judul Karya</th>
                                    <th class="border">Status</th>
                                    <th class="border">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengajuanList as $pengajuan)
                                    <tr>
                                        <td class="border border-gray-300 px-4 py-2">{{ $pengajuan->judul }}</td>
                                        <td class="border border-gray-300 px-4 py-2">{{ $pengajuan->status }}</td>
                                        <td class="border border-gray-300 px-4 py-2">
                                            <form action="{{ route('admin.pengajuan.confirm', $pengajuan->id) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                <button type="submit"
                                                    class="bg-green-500 text-white px-2 py-1 rounded">Konfirmasi</button>
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
