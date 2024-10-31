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
                    <h1 class="text-2xl font-bold mb-4">Buat Pengajuan Karya</h1>

                    <!-- Tampilkan pesan kesalahan jika ada -->
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('mahasiswa.pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="judul" class="block">Judul Karya:</label>
                            <input type="text" id="judul" name="judul"
                                class="border border-gray-300 rounded w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="block">Deskripsi:</label>
                            <textarea id="deskripsi" name="deskripsi" class="border border-gray-300 rounded w-full" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="kategori" class="block">Kategori:</label>
                            <input type="text" id="kategori" name="kategori"
                                class="border border-gray-300 rounded w-full" required>
                        </div>

                        <div class="mb-4">
                            <label for="gambar" class="block">Upload Gambar:</label>
                            <input type="file" name="images[]" multiple class="border border-gray-300 rounded w-full"
                                required>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim Pengajuan</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
