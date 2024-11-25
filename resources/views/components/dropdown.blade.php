@props([
    'align' => 'right',
    'width' => '48',
    'contentClasses' => 'py-1 bg-white dark:bg-primary-700',
])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'ltr:origin-top-left rtl:origin-top-right start-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-top';
            break;
        case 'right':
        default:
            $alignmentClasses = 'ltr:origin-top-right rtl:origin-top-left end-0';
            break;
    }

    switch ($width) {
        case '48':
            $width = 'w-48';
            break;
    }
@endphp

<div class="dropdown-container relative">
    <div class="dropdown-trigger">
        {{ $trigger }}
    </div>

    <div class="dropdown-content {{ $width }} {{ $alignmentClasses }} absolute z-50 mt-2 hidden rounded-md shadow-lg"
        style="display: none;">
        <div class="{{ $contentClasses }} rounded-md ring-1 ring-black ring-opacity-5">
            {{ $content }}
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const containers = document.querySelectorAll('.dropdown-container');

        containers.forEach(container => {
            const trigger = container.querySelector('.dropdown-trigger');
            const content = container.querySelector('.dropdown-content');

            trigger.addEventListener('click', () => {
                // Toggle visibility of the dropdown
                content.style.display = content.style.display === 'none' ||
                    content.style.display === '' ?
                    'block' :
                    'none';
            });

            document.addEventListener('click', (event) => {
                if (!container.contains(event.target)) {
                    content.style.display = 'none';
                }
            });
        });
    });
</script>
