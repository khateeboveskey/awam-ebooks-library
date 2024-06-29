@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-primary-700 dark:text-primary-300 mb-2']) }}>
    {{ $value ?? $slot }}
</label>
