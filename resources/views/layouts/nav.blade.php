
<html>
<style>
    .sticky {
        position: sticky;
        top: 0;
        z-index: 50; /* Pastikan z-index cukup tinggi agar navbar tetap di atas konten lain */
        transition: top 0.3s; /* Smooth effect untuk animasi */
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var lastScrollTop = 0;
        var navbar = document.querySelector("nav");

        window.addEventListener("scroll", function () {
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            // Scroll ke bawah
            if (currentScroll > lastScrollTop) {
                navbar.style.top = "-80px"; // Sembunyikan navbar (ubah nilai sesuai tinggi navbar)
            } else {
                navbar.style.top = "0"; // Tampilkan kembali navbar
            }
            lastScrollTop = currentScroll;
        });
    });
</script>

</html>
<nav x-data="{ open: false }" class="sticky bg-gradient-to-r from-red-700 to-red-900 p-2">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo dan Teks -->
            <div class="shrink-0 flex items-center space-x-3">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="img/logo.png" class="block h-14 w-auto" alt="Logo" />
                    <span class="ms-2 text-white dark:text-gray-100 text-lg font-semibold hover:text-[#ff0000]">Politeknik Negeri Pontianak</span>
                </a>
            </div>

            <!-- Navigation Links (Hidden on Mobile) -->
            <div class="hidden sm:flex items-center justify-start space-x-8">
                <x-nav-link :href="url('/')" :active="request()->routeIs('home')">
                    {{ __('Beranda') }}
                </x-nav-link>
                <x-nav-link :href="url('/gallery')" :active="request()->routeIs('gallery')">
                    {{ __('Galeri') }}
                </x-nav-link>
                <x-nav-link :href="url('/about')" :active="request()->routeIs('about')">
                    {{ __('Tentang') }}
                </x-nav-link>
                <x-nav-link :href="url('/contact')" :active="request()->routeIs('contact')">
                    {{ __('Kontak') }}
                </x-nav-link>

                <!-- Menu Login -->
                <x-nav-link class="flex items-center justify-center leading-7 text-white bg-white bg-opacity-20 hover:bg-opacity-50 transition duration-200 ease-in-out rounded-md px-4 py-1" 
                :href="url('/login')" 
                :active="request()->routeIs('login')">
                    {{ __('Login') }}
                </x-nav-link>
            </div>

            <!-- Hamburger Menu (Visible on Mobile) -->
            <div class="flex items-center sm:hidden ml-auto"> <!-- ml-auto untuk memindahkan tombol ke kanan -->
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link class="leading-7 text-white" :href="url('/')" :active="request()->routeIs('/')">
                {{ __('Beranda') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link class="leading-7 text-white" :href="url('/gallery')" :active="request()->routeIs('/gallery')">
                {{ __('Galeri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link class="leading-7 text-white" :href="url('/about')" :active="request()->routeIs('/about')">
                {{ __('Tentang') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link class="leading-7 text-white" :href="url('/contact')" :active="request()->routeIs('/contact')">
                {{ __('Kontak') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link class="leading-7 text-white" :href="url('/login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
