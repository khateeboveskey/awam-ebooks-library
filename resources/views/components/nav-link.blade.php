@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 border-b-4 overflow border-primary-400 dark:border-primary-600 text-md font-medium leading-5 text-primary-900 dark:text-primary-100 focus:outline-none focus:border-primary-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-4 overflow border-transparent text-md font-medium leading-5 text-primary-500 dark:text-primary-400 hover:text-primary-700 dark:hover:text-primary-300 hover:border-primary-300 dark:hover:border-primary-700 focus:outline-none focus:text-primary-700 dark:focus:text-primary-300 focus:border-primary-300 dark:focus:border-primary-700 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
