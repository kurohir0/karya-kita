<x-app-layout>
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700">
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
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs mt-4">
                        <h2 class="text-xl font-semibold mb-2">{{ __('Edit Akun') }}</h2>
                        <hr>
                        <form action="{{ route('admin.akun.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mt-2 mb-2">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Nama Pengguna') }}</label>
                                <input type="text" name="name" id="name" value="{{ $user->name }}" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="mb-4">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" value="{{ $user->email }}" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="mb-4">
                                <label for="usertype"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Tipe Akun') }}</label>
                                <select name="usertype" id="usertype" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50">
                                    <option value="dosen" {{ $user->usertype == 'dosen' ? 'selected' : '' }}>
                                        {{ __('Dosen') }}</option>
                                    <option value="mahasiswa" {{ $user->usertype == 'mahasiswa' ? 'selected' : '' }}>
                                        {{ __('Mahasiswa') }}</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="password"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Password (biarkan kosong jika tidak ingin mengubah)') }}</label>
                                <input type="password" name="password" id="password"
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">{{ __('Perbarui Akun') }}</button>
                                <a href="{{ route('admin.akun.index') }}"
                                    class="ml-4 px-4 py-2 text-white bg-gray-600 rounded-md hover:bg-gray-700">{{ __('Kembali') }}</a>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
