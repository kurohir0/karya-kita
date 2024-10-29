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
                        <h2 class="text-xl font-semibold mb-4">{{ __('Buat Akun') }}</h2>
                        @if ($errors->any())
                            <div class="mb-4">
                                <ul class="bg-red-500 text-white rounded p-2">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('admin.akun.store') }}" method="POST">
                            @csrf

                            <div class="mb-4">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Nama Pengguna') }}</label>
                                <input type="text" name="name" id="name" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="mb-4">
                                <label for="email"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Email') }}</label>
                                <input type="email" name="email" id="email" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="mb-4">
                                <label for="password"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
                                <input type="password" name="password" id="password" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Password') }}</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50" />
                            </div>

                            <div class="mb-4">
                                <label for="usertype"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">{{ __('Tipe Akun') }}</label>
                                <select name="usertype" id="usertype" required
                                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm dark:bg-gray-700 dark:text-gray-200 focus:border-blue-500 focus:ring focus:ring-blue-200 dark:focus:border-blue-500 dark:focus:ring-opacity-50">
                                    <option value="mahasiswa">{{ __('Mahasiswa') }}</option>
                                    <option value="dosen">{{ __('Dosen') }}</option>
                                </select>
                            </div>

                            <div class="flex items-center justify-end">
                                <button type="submit"
                                    class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">{{ __('Buat Akun') }}</button>
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
