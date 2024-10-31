<div x-data="{ open: false }" class="w-64 bg-white dark:bg-gray-800 border-r border-gray-100 dark:border-gray-700">
    <!-- Logo -->
    <div class="p-4">
        <a
            href="{{ Auth::user()->usertype == 'admin' ? route('admin.dashboard') : (Auth::user()->usertype == 'dosen' ? route('dosen.dashboard') : route('mahasiswa.dashboard')) }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-5 space-y-2">
        <!-- Beranda -->
        <a href="{{ Auth::user()->usertype == 'admin' ? route('admin.dashboard') : (Auth::user()->usertype == 'dosen' ? route('dosen.dashboard') : route('mahasiswa.dashboard')) }}"
            class="{{ request()->routeIs(
                Auth::user()->usertype == 'admin'
                    ? 'admin.dashboard'
                    : (Auth::user()->usertype == 'dosen'
                        ? 'dosen.dashboard'
                        : 'mahasiswa.dashboard'),
            )
                ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50'
                : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
            block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
            {{ __('Beranda') }}
        </a>

        <!-- Admin Links -->
        @if (Auth::user()->usertype == 'admin')
            <a href="{{ route('admin.pengajuan.index') }}"
                class="{{ request()->routeIs('admin.pengajuan.index') ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50' : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
                block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
                {{ __('Pengajuan') }}
            </a>
            <a href="{{ route('admin.karya.index') }}"
                class="{{ request()->routeIs('admin.karya.index') ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50' : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
                block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
                {{ __('Karya') }}
            </a>
            <a href="{{ route('admin.akun.index') }}"
                class="{{ request()->routeIs('admin.akun.index') ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50' : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
                block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
                {{ __('Akun') }}
            </a>
        @endif

        <!-- Mahasiswa Links -->
        @if (Auth::user()->usertype == 'mahasiswa')
            <a href="{{ route('mahasiswa.pengajuan.index') }}"
                class="{{ request()->routeIs('mahasiswa.pengajuan.index') ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50' : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
                block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
                {{ __('Pengajuan') }}
            </a>
            <a href="{{ route('mahasiswa.karya.index') }}"
                class="{{ request()->routeIs('mahasiswa.karya.index') ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50' : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
                block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
                {{ __('Karya Saya') }}
            </a>
            <a href="{{ route('profile.edit') }}"
                class="{{ request()->routeIs('profile.edit') ? 'border-l-4 border-indigo-400 dark:border-indigo-600 text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-900/50' : 'border-transparent text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700' }} 
                block w-full ps-3 pe-4 py-2 text-start text-base font-medium transition duration-150 ease-in-out">
                {{ __('Akun') }}
            </a>
        @endif
    </nav>
</div>
