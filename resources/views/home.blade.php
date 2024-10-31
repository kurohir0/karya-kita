@extends('layouts.front')

@section('title')
    <title>Home Page</title>
@endsection

@section('content')
    <!-- Hero Section -->
    <div class="relative mx-auto bg-[url('/public/img/bg.png')] bg-cover py-20 z-0">
        <!-- Overlay untuk opacity -->
        <div class="absolute inset-0 bg-gradient-to-r from-red-700 to-red-950 opacity-90 pointer-events-none"></div>

        <div class="relative mx-auto max-w-2xl py-20">
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
    <div class="mx-auto bg-gray-50 px-20 py-10 sm:px-20 relative z-10">
        <h2 class="text-4xl font-bold tracking-tight text-gray-900 border-b pb-4 border-gray-700">Projek Terbaru</h2>
        <div class="mt-12 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-4">
            @foreach ($karyas as $karya)
                <div class="relative border-2 border-solid rounded-lg p-4 shadow-sm">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                        @if ($karya->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $karya->images->first()->image_path) }}"
                                alt="{{ $karya->judul }}"
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
                        @else
                            <img src="{{ asset('img/default.png') }}" alt="Default Image"
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
                        @endif
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <span
                                class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">{{ $karya->kategori }}</span>
                            <h3 class="text-xl font-bold text-gray-900">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                {{ $karya->judul }}
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{ $karya->created_at->format('d F Y') }}</p>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center gap-2">
                        <button type="button" data-id="{{ $karya->id }}"
                            class="relative like-button flex items-center justify-center bg-red-500 text-white p-2 rounded-full hover:bg-red-600 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-4 h-4" viewBox="0 0 24 24">
                                <path
                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 6.02 4.02 4 6.5 4c1.54 0 3.04.99 3.57 2.36h.87C13.45 4.99 14.95 4 16.5 4 18.98 4 21 6.02 21 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                            </svg>
                        </button>
                        <span id="like-count-{{ $karya->id }}"
                            class="text-gray-700 font-semibold">{{ $karya->likes }}</span>
                    </div>
                    <div class="mt-6 w-full items-center justify-center">
                        <button type="button"
                            class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 modal-toggle"
                            data-modal-toggle="modal-{{ $karya->id }}">
                            Detail
                        </button>
                    </div>
                </div>

                {{-- Modal --}}
                <div id="modal-{{ $karya->id }}"
                    class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
                    <div class="bg-white rounded-lg shadow-lg p-6 max-w-5xl mx-auto">
                        <h2 class="text-xl font-bold">{{ $karya->judul }}</h2>
                        <span class="block mt-2 text-gray-500">Kategori: {{ $karya->kategori }}</span>
                        <div class="flex mt-4">
                            <div class="flex-grow">
                                <img id="main-image-{{ $karya->id }}"
                                    src="{{ asset('storage/' . $karya->images->first()->image_path) }}"
                                    alt="{{ $karya->judul }}" class="w-full object-cover rounded">
                            </div>
                            <div class="flex-none w-1/3 ml-4">
                                <div class="grid grid-cols-2 gap-2">
                                    @foreach ($karya->images as $image)
                                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $karya->judul }}"
                                            class="cursor-pointer w-full object-cover rounded"
                                            onclick="changeMainImage('{{ asset('storage/' . $image->image_path) }}', {{ $karya->id }})">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <span class="block mt-2" id="like-count-modal-{{ $karya->id }}">{{ $karya->likes }}
                            Likes</span>
                        <p class="mt-2">{{ $karya->deskripsi }}</p>
                        <button class="mt-4 text-red-600"
                            onclick="document.getElementById('modal-{{ $karya->id }}').classList.add('hidden');">Tutup</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Script --}}
    <script>
        function changeMainImage(src, id) {
            document.getElementById(`main-image-${id}`).src = src;
        }

        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.modal-toggle').forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.getAttribute('data-modal-toggle');
                    document.getElementById(modalId).classList.toggle('hidden');
                });
            });

            document.querySelectorAll('.like-button').forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    likeKarya(id);
                });
            });
        });

        function likeKarya(id) {
            fetch(`/karya/${id}/like`, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    // Update jumlah Like di luar modal
                    document.getElementById(`like-count-${id}`).innerText = data.likes;
                    // Update jumlah Like di dalam modal
                    const modalLikeCount = document.getElementById(`like-count-modal-${id}`);
                    if (modalLikeCount) {
                        modalLikeCount.innerText = data.likes + ' Likes';
                    }
                })
                .catch(error => console.error('Error:', error));
        }
    </script>
@endsection
