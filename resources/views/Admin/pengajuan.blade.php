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
                    <!-- Kotak di sekitar konten -->
                    <div
                        class="border-b tracking-wide border-gray-300 dark:border-gray-700 rounded-lg p-4 bg-white dark:bg-gray-800 shadow-xs">
                        <h1 class="text-2xl font-semibold mb-2">
                            {{ __('Selamat Datang di Halaman Pengajuan!') }}</h1>
                        <hr>
                        <p class="mt-2">
                            {{ __('Ini adalah tempat di mana Anda bisa melihat informasi terkait karya mahasiswa dan dosen yang sedang di ajukan.') }}
                        </p>
                    </div>
                    {{-- Tables --}}
                    <div class="mt-3 w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Nama Pengguna</th>
                                        <th class="px-4 py-3">Nama Projek</th>
                                        <th class="px-4 py-3">Kategori</th>
                                        <th class="px-4 py-3">Tanggal Submit</th>
                                        <th class="px-4 py-3">Status</th>
                                        <th class="px-4 py-3">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-semibold">Hans Burger</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">Sistem Informasi Manajemen Inventaris</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                Tugas Akhir
                                            </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm">6/10/2020</td>
                                        <td class="px-4 py-3 text-xs">
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                Pending
                                            </span>
                                        </td>
                                        <!-- Aksi -->
                                        <td class="px-4 py-3">
                                            <button
                                                class="w-8 h-8 bg-green-100 text-green-500 rounded-lg hover:bg-green-200 focus:outline-none"
                                                aria-label="Terima">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 m-auto"
                                                    viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                                    <path fill-rule="evenodd"
                                                        d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                            <button
                                                class="w-8 h-8 bg-red-100 text-red-500 rounded-lg hover:bg-red-200 focus:outline-none ml-1"
                                                aria-label="Tolak">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 m-auto"
                                                    viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                                    <path
                                                        d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div
                            class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                            <span class="flex items-center col-span-3">Showing 21-30 of 100</span>
                            <span class="col-span-2"></span>
                            <!-- Pagination -->
                            <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                <nav aria-label="Table navigation">
                                    <ul class="inline-flex items-center">
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Previous">
                                                <svg aria-hidden="true" class="w-4 h-4 fill-current"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                        <li><button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                        </li>
                                        <li><button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                        </li>
                                        <li><button
                                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                                        </li>
                                        <li><button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                        </li>
                                        <li><span class="px-3 py-1">...</span></li>
                                        <li><button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                        </li>
                                        <li><button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                        </li>
                                        <li>
                                            <button
                                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Next">
                                                <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                                    viewBox="0 0 20 20">
                                                    <path
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" fill-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </li>
                                    </ul>
                                </nav>
                            </span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</x-app-layout>
