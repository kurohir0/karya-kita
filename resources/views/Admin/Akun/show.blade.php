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
                    <div
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs">
                        <h1 class="text-2xl font-semibold mb-2">{{ __('Selamat Datang di Dashboard!') }}</h1>
                        <hr>
                        <p class="mt-2">{{ __('Ini adalah tempat di mana Anda bisa melihat informasi penting.') }}</p>
                    </div>

                    <div
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs mt-4">
                        <h2 class="text-xl font-semibold mb-2">{{ __('Detail Akun') }}</h2>
                        <hr>
                        <p class="mt-2 mb-2"><strong>{{ __('Nama Pengguna:') }}</strong> {{ $user->name }}</p>
                        <p class="mb-2"><strong>{{ __('Email:') }}</strong> {{ $user->email }}</p>
                        <p class="mb-2"><strong>{{ __('Tipe Akun:') }}</strong> {{ ucfirst($user->usertype) }}</p>
                        <p class="mb-4"><strong>{{ __('Tanggal Bergabung:') }}</strong>
                            {{ $user->created_at->format('d/m/Y') }}</p>
                        <div class="mt-4 flex justify-between">
                            <div class="flex space-x-2">
                                <a href="{{ route('admin.akun.edit', $user->id) }}"
                                    class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700 border border-blue-600 hover:text-white">{{ __('Edit') }}</a>
                                <form action="{{ route('admin.akun.destroy', $user->id) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-2 text-white bg-red-600 rounded-md hover:bg-red-700 border border-red-600 hover:text-white">{{ __('Hapus') }}</button>
                                </form>
                            </div>
                            <a href="{{ route('admin.akun.index') }}"
                                class="px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-gray-700 border border-gray-600 hover:text-white">{{ __('Kembali') }}</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
