<div x-data="{ open: false }" class="flex h-screen">
    <!-- Sidebar -->
    <div :class="{ 'block': open, 'hidden': !open }"
        class="w-64 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700 hidden sm:block">
        <!-- Logo -->
        <div class="p-4">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
        </div>

        <!-- Navigation Links -->
        <nav class="mt-5 space-y-2">
            <!-- Beranda -->
            <x-nav-link :href="Auth::user()->usertype == 'admin' ? route('admin.dashboard') : route('dashboard')" :active="Auth::user()->usertype == 'admin'
                ? request()->routeIs('admin.dashboard')
                : request()->routeIs('dashboard')">
                {{ __('Beranda') }}
            </x-nav-link>

            <!-- Admin Links -->
            @if (Auth::user()->usertype == 'admin')
                <x-nav-link href="pengajuan" :active="request()->routeIs('admin.pengajuan')">
                    {{ __('Pengajuan') }}
                </x-nav-link>
                <x-nav-link href="karya" :active="request()->routeIs('admin.karya')">
                    {{ __('Karya') }}
                </x-nav-link>
                <x-nav-link href="akun" :active="request()->routeIs('admin.akun')">
                    {{ __('Akun') }}
                </x-nav-link>
            @endif

            <!-- Mahasiswa Links -->
            @if (Auth::user()->usertype == 'mahasiswa')
                <x-nav-link href="mahasiswa/pengajuan" :active="request()->routeIs('mahasiswa.pengajuan')">
                    {{ __('Pengajuan') }}
                </x-nav-link>
                <x-nav-link href="mahasiswa/karya" :active="request()->routeIs('mahasiswa.karya')">
                    {{ __('Karya Saya') }}
                </x-nav-link>
                <x-nav-link href="profile" :active="request()->routeIs('profile.edit')">
                    {{ __('Akun') }}
                </x-nav-link>
            @endif
        </nav>
    </div>

    <!-- Main Content -->
    <div class="flex-1 bg-gray-100 dark:bg-gray-900">
        <!-- Top Bar -->
        <header class="bg-white dark:bg-gray-800 shadow-sm">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <!-- Page Title -->
                <div class="text-lg font-semibold text-gray-800 dark:text-gray-200">
                    {{ __('Dashboard') }}
                </div>

                <!-- Settings Dropdown -->
                <div class="relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <!-- Profile Link -->
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Home Page Link -->
                            <x-dropdown-link :href="url('/')">
                                {{ __('Home Page') }}
                            </x-dropdown-link>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main class="p-6">
            {{ $slot }}
        </main>
    </div>

    <!-- Hamburger Menu (for mobile) -->
    <div class="sm:hidden fixed top-0 left-0 p-4">
        <button @click="open = ! open" class="text-gray-500 focus:outline-none">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>
