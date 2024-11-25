@props(['active'])

@php
    $baseClasses =
        'inline-flex items-center overflow text-md font-medium leading-5 transition duration-150 ease-in-out h-full';

    $activeClasses = ['text-primary-900 dark:text-primary-100', 'focus:outline-none'];

    $inactiveClasses = [
        'text-primary-500 dark:text-primary-400',
        'hover:text-primary-700 dark:hover:text-primary-300',
        'focus:outline-none',
        'focus:text-primary-700 dark:focus:text-primary-300',
    ];

    $classes =
        $baseClasses . ' ' . implode(' ', $active ?? false ? $activeClasses : $inactiveClasses);
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
