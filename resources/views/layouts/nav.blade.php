<nav x-data="{ open: false }" class="bg-gradient-to-r from-red-700 to-red-900 p-2">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="shrink-0 flex items-center">
                <a href="{{ url('/') }}">
                    <span class="sr-only fill-current text-gray-800 dark:text-gray-100">Karya Kita</span>
                    <img src="img/logo.png" class="block h-9 w-auto" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                <x-nav-link class="leading-7 text-white" :href="url('/')" :active="request()->routeIs('/')">
                    {{ __('Beranda') }}
                </x-nav-link>
                <x-nav-link class="leading-7 text-white " :href="url('/gallery')" :active="request()->routeIs('/gallery')">
                    {{ __('Galeri') }}
                </x-nav-link>
                <x-nav-link class="leading-7 text-white" :href="url('/about')" :active="request()->routeIs('/about')">
                    {{ __('Tentang') }}
                </x-nav-link>
                <x-nav-link class="leading-7 text-white" :href="url('/contact')" :active="request()->routeIs('/contact')">
                    {{ __('Kontak') }}
                </x-nav-link>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-nav-link class="leading-7 text-white" :href="Auth::user()->usertype == 'admin' ? url('admin/dashboard') : route('dashboard')" :active="Auth::user()->usertype == 'admin'
                        ? request()->routeIs('admin.dashboard')
                        : request()->routeIs('dashboard')">
                        {{ __('Beranda') }}
                    </x-nav-link>
                @else
                    <x-nav-link class="leading-7 text-white" :href="url('/login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-nav-link>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
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
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-100 dark:border-gray-600">
            <div class="pb-2 space-y-1">
                @auth
                    <x-responsive-nav-link class="leading-7 text-white" :href="Auth::user()->usertype == 'admin' ? url('admin/dashboard') : route('dashboard')" :active="Auth::user()->usertype == 'admin'
                        ? request()->routeIs('admin.dashboard')
                        : request()->routeIs('dashboard')">
                        {{ __('Beranda') }}
                    </x-responsive-nav-link>
                @else
                    <x-responsive-nav-link class="leading-7 text-white" :href="url('/login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
                    </x-responsive-nav-link>
                @endauth
            </div>
        </div>
    </div>
</nav>
