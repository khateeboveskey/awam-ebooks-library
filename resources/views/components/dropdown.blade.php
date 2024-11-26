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

    <div class="dropdown-content {{ $width }} {{ $alignmentClasses }} absolute z-50 mt-2 scale-95 transform rounded-md opacity-0 shadow-lg transition-all duration-200"
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





                if (content.style.display === 'none' || content.style
                    .display === '') {
                    content.style.display = 'block';
                    setTimeout(() => {
                        content.classList.remove('opacity-0',
                            'scale-95');
                        content.classList.add('opacity-100',
                            'scale-100');
                    }, 10);
                } else {
                    content.classList.remove('opacity-100', 'scale-100');
                    content.classList.add('opacity-0', 'scale-95');
                    setTimeout(() => {
                        content.style.display = 'none';
                    }, 200);
                }
            });

            document.addEventListener('click', (event) => {
                if (!container.contains(event.target)) {

                    content.classList.remove('opacity-100', 'scale-100');
                    content.classList.add('opacity-0', 'scale-95');
                    setTimeout(() => {
                        content.style.display = 'none';
                    }, 200);
                }
            });
        });
    });
</script>
