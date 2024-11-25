@props(['active'])

@php
    $baseClasses =
        'inline-flex items-center px-1 pt-1 border-b-4 overflow text-md font-medium leading-5 transition duration-150 ease-in-out h-full';

    $activeClasses = [
        'border-primary-400 dark:border-primary-600',
        'text-primary-900 dark:text-primary-100',
        'focus:outline-none focus:border-primary-700',
    ];

    $inactiveClasses = [
        'border-transparent',
        'text-primary-500 dark:text-primary-400',
        'hover:text-primary-700 dark:hover:text-primary-300',
        'hover:border-primary-300 dark:hover:border-primary-700',
        'focus:outline-none',
        'focus:text-primary-700 dark:focus:text-primary-300',
        'focus:border-primary-300 dark:focus:border-primary-700',
    ];

    $classes =
        $baseClasses . ' ' . implode(' ', $active ?? false ? $activeClasses : $inactiveClasses);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
