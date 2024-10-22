@extends('layouts.front')

@section('title')
    <title>Home Page</title>
@endsection


@section('content')
    <!-- Hero Section -->
    <div class="relative mx-auto bg-[url('/public/img/bg.png')] bg-cover py-20">
        <!-- Overlay untuk opacity -->
        <div class="absolute inset-0 bg-gradient-to-r from-red-700 to-red-950 opacity-90"></div>

        <div class="mx-auto max-w-2xl py-20 relative">
            <div class="text-center">
                <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-7xl">Student and Faculty
                    Showcase Portal</h1>
                <p class="mt-8 text-lg font-semibold leading-8 text-white">Website Showcase Karya Mahasiswa dan Dosen Teknik
                    Informatika Politeknik Negeri Pontianak</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#" class="text-sm font-semibold leading-6 text-white">Lebih lanjut <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- New Project Section -->
    <div class="mx-auto bg-gray-50 px-20 py-10 sm:px-20">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 border-b pb-4 border-gray-700">Projek Terbaru</h2>
        <div class="mt-12 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-4">
            <!-- Card 1 -->
            <div class="relative border-2 border-solid rounded-lg p-4 shadow-sm">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                    <img src="img/bg.png" alt="Showcase2"
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Tugas
                            Akhir</span>
                        <h3 class="text-xl font-bold text-gray-9">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Project Website 1
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">08 Agustus 2024</p>
                    </div>
                </div>
                {{-- Rating --}}
                <div class="mt-2">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                    </div>
                </div>
                <div class="mt-6 w-full items-center justify-center">
                    <button type="button"
                        class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                        Detail
                        <a href="#"
                            class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                    </button>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="relative border-2 border-solid rounded-lg p-4 shadow-sm">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                    <img src="img/bg.png" alt="Showcase2"
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Tugas
                            Akhir</span>
                        <h3 class="text-xl font-bold text-gray-9">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Project Website 2
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">08 Agustus 2024</p>
                    </div>
                </div>
                {{-- Rating --}}
                <div class="mt-2">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                    </div>
                </div>
                <div class="mt-6 w-full items-center justify-center">
                    <button type="button"
                        class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                        Detail
                        <a href="#"
                            class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                    </button>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="relative border-2 border-solid rounded-lg p-4 shadow-sm">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                    <img src="img/bg.png" alt="Showcase2"
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <span
                            class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Tugas
                            Akhir</span>
                        <h3 class="text-xl font-bold text-gray-9">
                            <span aria-hidden="true" class="absolute inset-0"></span>
                            Project Website 3
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">08 Agustus 2024</p>
                    </div>
                </div>
                {{-- Rating --}}
                <div class="mt-2">
                    <div class="flex items-center">
                        <div class="flex items-center">
                            <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <p class="sr-only">4 out of 5 stars</p>
                    </div>
                </div>
                <div class="mt-6 w-full items-center justify-center">
                    <button type="button"
                        class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                        Detail
                        <a href="#"
                            class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Section -->
    <div class="mx-auto bg-gradient-to-r from-red-600 to-red-900 py-6">
        <div class="mx-auto max-w-3xl">
            <div class="flex justify-around items-center">
                <a href="https://www.kemdikbud.go.id/"><img src="img/tutwuri.png" class="w-32 hover:"
                        alt="Logo Tut Wuri Handayani"></a>
                <a href="https://www.polnep.ac.id/"><img src="img/polnep.png" class="w-32" alt="Logo Polnep"></a>
                <a href="https://vokasi.kemdikbud.go.id/"><img src="img/vokasi.png" class="h-24"
                        alt="Logo Vokasi"></a>
                <a href="https://kampusmerdeka.kemdikbud.go.id/"><img src="img/kampusmerdeka.png" class="w-32"
                        alt="Logo Kampus Merdeka"></a>
            </div>
        </div>
    </div>
@endsection
