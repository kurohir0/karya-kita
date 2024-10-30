@extends('layouts.front')

@section('title')
    <title>Galeri</title>
@endsection

@section('content')
<div class="mx-auto px-5 py-10 sm:px-10">
    <h2 class="text-4xl font-bold tracking-tight text-center text-gray-900 border-b pb-4 border-gray-700 hover:text-[#ff0000]">Galeri Projek</h2>
 <!-- Input pencarian dan filter -->
 <div class="flex justify-center mt-10 mb-6">
    <input type="text" id="searchInput" placeholder="Cari berdasarkan nama proyek..." class="w-2/3 sm:w-3/4 md:w-1/2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
    
    <select id="typeFilter" class="ml-4 w-1/3 sm:w-1/4 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="">Semua Jenis</option>
        <option value="Karya Ilmiah">Karya Ilmiah</option>
        <option value="Proyek">Proyek</option>
        <option value="Tugas Akhir">Tugas Akhir</option>
    </select>
</div>

    <div class="mt-12 grid grid-cols-1 gap-x-4 gap-y-4 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-4" id="projectGrid">
        <!-- Card 1 -->
        <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Proyek Website 1" data-type="Proyek">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Proyek</span>
                    <h3 class="text-xl font-bold text-gray-9">Proyek Website 1</h3>
                    <p class="mt-1 text-sm text-gray-500">08 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Tugas Akhir" data-type="Tugas Akhir">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Tugas Akhir</span>
                    <h3 class="text-xl font-bold text-gray-9">Tugas Akhir</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>
        
           <!-- Card 3 -->
           <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Proyek Tugas" data-type="Proyek">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Proyek</span>
                    <h3 class="text-xl font-bold text-gray-9">Proyek Tugas</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>

           <!-- Card 4 -->
           <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Website Tugas" data-type="Proyek">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Proyek</span>
                    <h3 class="text-xl font-bold text-gray-9">Website Tugas</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>

           <!-- Card 5 -->
           <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Proyek Websites Absen" data-type="Proyek">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Proyek</span>
                    <h3 class="text-xl font-bold text-gray-9">Proyek Websites Absen</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>

           <!-- Card 6 -->
           <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Tugas Akhir Desktop" data-type="Tugas Akhir">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Tugas Akhir</span>
                    <h3 class="text-xl font-bold text-gray-9">Tugas Akhir Desktop</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>

           <!-- Card 7 -->
           <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Karya Ilmiah" data-type="Karya Ilmiah">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Karya Ilmiah</span>
                    <h3 class="text-xl font-bold text-gray-9">Karya Ilmiah</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>

           <!-- Card 8 -->
           <div class="project-card relative border-2 border-solid rounded-lg p-4 shadow-sm" data-name="Karya Ilmiah Dosen" data-type="Karya Ilmiah">
            <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden border-2 border-solid rounded-md lg:aspect-none lg:h-60">
                <img src="img/bg.png" alt="Showcase2" class="h-full w-full object-cover object-center lg:h-full lg:w-full rounded-sm">
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-sm font-medium mb-1 text-blue-700 ring-1 ring-inset ring-blue-700/10">Karya Ilmiah</span>
                    <h3 class="text-xl font-bold text-gray-9">Karya Ilmiah Dosen</h3>
                    <p class="mt-1 text-sm text-gray-500">09 Agustus 2024</p>
                </div>
            </div>
            <div class="mt-6 w-full items-center justify-center">
                <button type="button" class="relative inline-flex w-full justify-center rounded-md border border-solid border-blue-600 px-3 py-2 text-md font-medium text-gray-900 shadow-sm hover:bg-blue-100 group">
                    Detail
                    <a href="#" class="absolute left-0 right-0 top-0 bottom-0 bg-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-200"></a>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Script pencarian -->
<script>
    document.getElementById('searchInput').addEventListener('input', filterProjects);
    document.getElementById('typeFilter').addEventListener('change', filterProjects);

    function filterProjects() {
        const searchValue = document.getElementById('searchInput').value.toLowerCase();
        const selectedType = document.getElementById('typeFilter').value;
        const projectCards = document.querySelectorAll('.project-card');

        projectCards.forEach(card => {
            const projectName = card.getAttribute('data-name').toLowerCase();
            const projectType = card.getAttribute('data-type');

            const matchesSearch = projectName.includes(searchValue);
            const matchesType = selectedType === "" || projectType === selectedType;

            if (matchesSearch && matchesType) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    }
</script>
@endsection
