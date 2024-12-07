@php
    $routes = [
        [
            'route' => 'admin.index',
            'icon' => 'home',
            'text' => 'الرئيسية',
        ],
        [
            'route' => 'admin.books.index',
            'icon' => 'book',
            'text' => 'الكتب',
        ],
        // [
        //     'route' => 'admin.authors.index',
        //     'icon' => 'users',
        //     'text' => 'المؤلفون',
        // ],
        // [
        //     'route' => 'admin.categories.index',
        //     'icon' => 'tags',
        //     'text' => 'التصنيفات',
        // ],
    ];
@endphp

<div x-data="{ open: true }" class="w-full bg-white shadow-lg md:w-64">
    <div class="flex items-center justify-between p-4">
        <h2 class="text-xl font-semibold text-gray-800 md:text-2xl">
            <i class="fas fa-tachometer-alt me-2"></i>لوحة التحكم
        </h2>
        <button class="md:hidden" @click="open = !open">
            <i class="fas fa-bars text-gray-600"></i>
        </button>
    </div>
    <nav class="mt-4" x-show="open" x-transition>
        @foreach ($routes as $route)
            <a href="{{ route($route['route']) }}"
                class="{{ request()->routeIs($route['route']) ? 'bg-gray-100 text-gray-800' : '' }} block px-4 py-2 text-gray-600 transition duration-150 hover:bg-gray-100 hover:text-gray-800">
                <i class="fas fa-{{ $route['icon'] }} me-2"></i>{{ $route['text'] }}
            </a>
        @endforeach
    </nav>
</div>
