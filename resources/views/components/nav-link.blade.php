@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'inline-flex items-center px-1 pt-1 border-b-2 border-white dark:border-white text-sm font-medium ml-10 text-white dark:text-gray-100 hover:text-[#ff0000] focus:outline-none hover:border-[#ff0000] focus:border-[#ff0000] transition duration-150 ease-in-out'
        : 'inline-flex items-center px-1 pt-1 text-sm font-medium ml-10 text-[#fffeec] dark:text-gray-400 hover:text-[#ff0000] dark:hover:text-gray-300 focus:outline-none focus:text-red-400 dark:focus:text-red-300 transition duration-150 ease-in-out transform hover:scale-105';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
