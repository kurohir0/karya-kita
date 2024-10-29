@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full ps-3 pe-4 py-2 text-start text-base text-white dark:text-gray-100 hover:text-[#ff0000] focus:outline-none hover:border-[#ff0000] focus:border-[#ff0000] bg-white bg-opacity-25 transition duration-150 ease-in-out'
            : 'block w-full ps-3 pe-4 py-2 border-l-4 border-transparent text-start text-base font-medium text-gray-600 dark:text-gray-400 hover:text-[#ff0000]text-sm font-medium text-[#fffeec] dark:text-gray-400 hover:text-[#ff0000] dark:hover:text-gray-300 focus:outline-none focus:text-red-400 dark:focus:text-red-300 transition duration-150 ease-in-out transform hover:scale-105text-sm font-medium ml-10 text-[#fffeec] dark:text-gray-400 hover:text-[#ff0000] dark:hover:text-gray-300 focus:outline-none focus:text-red-400 dark:focus:text-red-300 transition duration-150 ease-in-out transform hover:scale-105text-sm font-medium ml-10 text-[#fffeec] dark:text-gray-400 hover:text-[#ff0000] dark:hover:text-gray-300 focus:outline-none focus:text-red-400 dark:focus:text-red-300 transition duration-150 ease-in-out transform hover:scale-105 dark:hover:text-gray-200 focus:outline-none focus:text-white dark:focus:text-gray-200 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
