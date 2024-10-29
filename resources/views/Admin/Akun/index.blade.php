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
                    <!-- Dashboard Greeting -->
                    <div
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs">
                        <h1 class="text-2xl font-semibold mb-2">{{ __('Selamat Datang di Halaman Akun!') }}</h1>
                        <hr>
                        <p class="mt-2">
                            {{ __('Ini adalah tempat di mana Anda bisa melihat daftar akun yang telah terdaftar.') }}
                        </p>
                    </div>
                    <!-- Account List -->
                    <div
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs mt-4">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">{{ __('Daftar Akun') }}</h2>
                            <div class="mt-4">
                                <a href="{{ route('admin.akun.create') }}"
                                    class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">Buat Akun</a>
                            </div>
                        </div>
                        <div class="mt-3 w-full overflow-hidden rounded-lg shadow-xs">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-no-wrap border border-gray-300 dark:border-gray-700">
                                    <thead>
                                        <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                            <th class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">Nama
                                                Pengguna</th>
                                            <th class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">Email
                                            </th>
                                            <th class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">Tipe
                                                Akun</th>
                                            <th class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">Tanggal
                                                Bergabung</th>
                                            <th class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">Aksi
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                        @foreach ($users as $user)
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">
                                                    {{ $user->name }}</td>
                                                <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">
                                                    {{ $user->email }}</td>
                                                <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">
                                                    {{ $user->usertype }}</td>
                                                <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">
                                                    {{ $user->created_at->format('d/m/Y') }}</td>
                                                <td class="px-4 py-3 border-b border-gray-300 dark:border-gray-700">
                                                    <a href="{{ route('admin.akun.show', $user->id) }}"
                                                        class="text-blue-600 border border-blue-600 hover:bg-blue-600 hover:text-white px-2 py-1 rounded-md">Show</a>
                                                    <a href="{{ route('admin.akun.edit', $user->id) }}"
                                                        class="text-blue-600 border border-blue-600 hover:bg-blue-600 hover:text-white px-2 py-1 rounded-md">Edit</a>
                                                    <form action="{{ route('admin.akun.destroy', $user->id) }}"
                                                        method="POST" class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="text-red-600 border border-red-600 hover:bg-red-600 hover:text-white px-2 py-1 rounded-md">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
