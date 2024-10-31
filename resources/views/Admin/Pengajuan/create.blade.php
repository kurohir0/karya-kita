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
                <div class="container mx-auto p-4">
                    <h2 class="text-2xl font-semibold mb-4">Pengajuan Karya Baru</h2>

                    <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="judul" class="block">Judul Karya</label>
                            <input type="text" name="judul" id="judul" class="w-full border rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="deskripsi" class="block">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="w-full border rounded"></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="kategori" class="block">Kategori</label>
                            <input type="text" name="kategori" id="kategori" class="w-full border rounded" required>
                        </div>

                        <div class="mb-4">
                            <label for="gambar" class="block">Upload Gambar Karya</label>
                            <input type="file" name="gambar" id="gambar" class="w-full border rounded"
                                accept="image/*">
                        </div>

                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Ajukan Karya</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
