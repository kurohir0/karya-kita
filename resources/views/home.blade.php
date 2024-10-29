@extends('layouts.front')

@section('title')
    <title>Home Page | Karya Kita</title>
@endsection


@section('content')
    <!-- Hero Section -->
   
    {{-- <div class="relative mx-auto bg-[url('/public/img/bg.png')] bg-cover bg-center min-h-screen h-screen rounded-b-[40px] overflow-hidden"> --}}
        <div class="banner">
            <div class="banner-image">
        <!-- Overlay untuk opacity -->
        <div class="overlay"></div>
        <div class="banner-grad"></div>
        <div class="absolute inset-0 flex flex-col justify-center items-center">

            <div class="mx-auto max-w-2xl text-center">
                <h1 class="text-balance text-4xl font-bold tracking-tight text-white sm:text-7xl animate-title">Student and Faculty Showcase Portal</h1>
                <p class="mt-8 text-lg font-semibold leading-6 text-white">
                    <span class="animate-left">Website</span>
                    <span class="animate-left">Showcase</span>
                    <span class="animate-left">Karya</span>
                    <span class="animate-left">Mahasiswa</span>
                    <span class="animate-left">dan</span>
                    <span class="animate-left">Dosen</span>
                    <span class="animate-left">Teknik</span>
                    <span class="animate-left">Informatika</span><br>
                    <span class="animate-left">Politeknik</span>
                    <span class="animate-left">Negeri</span>
                    <span class="animate-left">Pontianak</span>
                </p>
            </div>
        </div>
    </div>
    </div>
    
    <style>
        /* Keyframes for left-to-right animation */
        @keyframes slide-in-left {
            from {
                opacity: 0;
                transform: translateX(-30px); /* Move from the left */
            }
            to {
                opacity: 1;
                transform: translateX(0); /* Return to original position */
            }
        }
    
        /* Keyframes for title animation */
        @keyframes slide-in-title {
            from {
                opacity: 0;
                transform: translateX(-50px); /* Move from the left */
            }
            to {
                opacity: 1;
                transform: translateX(0); /* Return to original position */
            }
        }
    
        /* Applying the animation with delay for each word */
        .animate-left {
            display: inline-block; /* Ensure the spans are inline-block for animation */
            opacity: 0; /* Start invisible */
            animation: slide-in-left 0.7s ease forwards; /* Set the animation */
        }
    
        /* Delay each span's animation */
        .animate-left:nth-child(1) { animation-delay: 0s; }
        .animate-left:nth-child(2) { animation-delay: 0.1s; }
        .animate-left:nth-child(3) { animation-delay: 0.2s; }
        .animate-left:nth-child(4) { animation-delay: 0.3s; }
        .animate-left:nth-child(5) { animation-delay: 0.4s; }
        .animate-left:nth-child(6) { animation-delay: 0.5s; }
        .animate-left:nth-child(7) { animation-delay: 0.6s; }
        .animate-left:nth-child(8) { animation-delay: 0.7s; }
        .animate-left:nth-child(9) { animation-delay: 0.8s; }
        .animate-left:nth-child(10) { animation-delay: 0.9s; }
        .animate-left:nth-child(11) { animation-delay: 1s; }
        .animate-left:nth-child(12) { animation-delay: 1.1s; }
    
        /* Animation for title */
        .animate-title {
            display: inline-block; /* Ensure title is inline-block for animation */
            opacity: 0; /* Start invisible */
            animation: slide-in-title 1s ease forwards; /* Set the animation for title */
            animation-delay: 0.5s; /* Delay before title appears */
        }

        .banner {
    position: relative;
    overflow: hidden;
    height: 600px;
}

.banner-image {
    background-image: url(img/bg.png);
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    height: 100%;
    position: relative;
    z-index: 1;
    border-bottom-left-radius: 80px;
    border-bottom-right-radius: 80px;
}

.banner::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 2; /* Ensure it's above the image */
    border-bottom-left-radius: 80px;
    border-bottom-right-radius: 80px;

}

.overlay {
    position: absolute; /* Overlay memerlukan posisi absolut */
    top: 0; /* Mengatur dari atas */
    left: 0; /* Mengatur dari kiri */
    right: 0; /* Mengatur dari kanan */
    bottom: 0; /* Mengatur dari bawah */
    background: linear-gradient(to right, #670000, #924700, #c87c00); /* Gradient dari kiri ke kanan */
    opacity: 0.8; /* Mengatur transparansi */
    border-bottom-left-radius: 80px;
    border-bottom-right-radius: 80px;
}
    </style>
    
    
    
    
    
    <!-- New Project Section -->
    <div class="mx-auto bg-gray-50 px-20 py-10 sm:px-20">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 border-b pb-4 border-gray-700 text-center hover:text-[#ff0000]">Projek Terbaru</h2>
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

@endsection
