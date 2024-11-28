<!-- Navigation Component -->
<nav id="mainNav" x-data="{ open: false }"
    class="fixed left-0 right-0 top-0 z-50 rounded-b-2xl border-primary-100 bg-white px-5 pb-2 transition-transform duration-300 dark:border-primary-700 dark:bg-primary-900 sm:pb-0 lg:px-44">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl">
        <div class="flex h-16 justify-between">
            <!-- Left Side Navigation -->
            <div class="flex flex-1 justify-center">
                <!-- Logo -->
                <div class="flex shrink-0 items-center">
                    <a href="{{ route('home') }}">
                        <h1 class="font-serif text-4xl text-white">مكتبة أوام</h1>
                    </a>
                </div>

                <!-- Desktop Navigation Links -->
                <div class="hidden flex-1 justify-center gap-x-8 sm:-my-px sm:flex">
                    @php
                        $navigationLinks = [
                            ['route' => 'home', 'text' => 'الرئيسية'],
                            ['route' => 'books.index', 'text' => 'أشهر الكتب'],
                            ['route' => 'dashboard', 'text' => 'الأقسام'],
                            ['route' => 'authors.index', 'text' => 'المؤلفون'],
                        ];
                    @endphp

                    @foreach ($navigationLinks as $link)
                        <x-nav-link :href="route($link['route'])" :active="request()->routeIs($link['route'])">
                            {{ $link['text'] }}
                        </x-nav-link>
                    @endforeach
                </div>
            </div>

            <!-- Right Side Navigation -->
            <div class="hidden sm:ms-6 sm:flex sm:items-center">
                @auth
                    <!-- User Dropdown Menu -->
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center rounded-md border border-transparent text-sm font-medium leading-4 text-primary-500 transition duration-150 ease-in-out hover:text-primary-700 focus:outline-none dark:text-primary-400 dark:hover:text-primary-300">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="ms-1 h-4 w-4 fill-current"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">الملف الشخصي</x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    تسجيل الخروج
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth

                @guest
                    <div class="flex flex-row gap-x-3">
                        <a href="{{ route('login') }}"
                            class="rounded-lg border border-primary-400 px-4 py-1.5 text-primary-500 transition duration-150 ease-in-out hover:bg-primary-50 hover:text-primary-600 dark:border-primary-500 dark:text-primary-400 dark:hover:bg-primary-900 dark:hover:text-primary-300">تسجيل
                            الدخول</a>
                        <a href="{{ route('register') }}"
                            class="rounded-lg bg-primary-500 px-4 py-1.5 text-white transition duration-150 ease-in-out hover:bg-primary-600 dark:bg-primary-600 dark:hover:bg-primary-700">إنشاء
                            حساب</a>
                </div> @endguest
            </div>

            <!-- Mobile Menu Button -->
            <div class="-me-2 flex items-center sm:hidden">
                <button id="menuToggle"
                    class="mobile-menu-button inline-flex items-center justify-center rounded-md p-2 text-primary-400 transition duration-150 ease-in-out hover:bg-primary-100 hover:text-primary-500 focus:bg-primary-100 focus:text-primary-500 focus:outline-none dark:text-primary-500 dark:hover:bg-primary-900 dark:hover:text-primary-400 dark:focus:bg-primary-900 dark:focus:text-primary-400">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path id="menuOpen" class="inline-flex" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path id="menuClose" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <div id="responsiveMenu"
        class="fixed left-0 right-0 top-16 z-50 hidden transform rounded-b-2xl bg-white shadow-lg transition-all duration-300 ease-in-out dark:bg-primary-900">
        <!-- Mobile Navigation Links -->
        <div class="space-y-1 pb-3 pt-2">
            @foreach ($navigationLinks as $link)
                <x-responsive-nav-link :href="route($link['route'])" :active="request()->routeIs($link['route'])">
                    {{ $link['text'] }}
                </x-responsive-nav-link>
            @endforeach
        </div>

        <hr class="mx-4 border-primary-200 dark:border-primary-700">

        @guest
            <div class="space-y-1 pb-3 pt-2">
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">تسجيل
                    الدخول</x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">إنشاء
                    حساب</x-responsive-nav-link>
            </div>
        @endguest

        @auth
            <div class="border-primary-200 pb-4 pt-4 dark:border-primary-600">
                <div class="px-4">
                    <div class="text-base font-medium text-primary-800 dark:text-primary-200">
                        {{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-primary-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">الملف الشخصي</x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            تسجيل الخروج
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>

<div class="h-16"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const elements = {
            menuToggle: document.getElementById('menuToggle'),
            nav: document.querySelector('nav'),
            menuOpen: document.getElementById('menuOpen'),
            menuClose: document.getElementById('menuClose'),
            responsiveMenu: document.getElementById('responsiveMenu')
        };

        const toggleMenu = (isOpen) => {
            elements.nav.classList.toggle('rounded-b-2xl', !isOpen);
            elements.menuOpen.classList.toggle('hidden', isOpen);
            elements.menuOpen.classList.toggle('inline-flex', !isOpen);
            elements.menuClose.classList.toggle('hidden', !isOpen);
            elements.menuClose.classList.toggle('inline-flex', isOpen);
            elements.responsiveMenu.classList.toggle('hidden', !isOpen);

            // Add slide animation
            if (isOpen) {
                elements.responsiveMenu.classList.add('translate-y-0', 'opacity-100');
                elements.responsiveMenu.classList.remove('-translate-y-10',
                    'opacity-0');
            } else {
                elements.responsiveMenu.classList.add('-translate-y-10', 'opacity-0');
                elements.responsiveMenu.classList.remove('translate-y-0',
                    'opacity-100');
            }
        };

        let isMenuOpen = false;
        elements.menuToggle.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            toggleMenu(isMenuOpen);
        });

        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll <= 0) {
                elements.nav.classList.remove('-translate-y-full');
                return;
            }

            if (currentScroll > lastScroll && !elements.nav.classList.contains(
                    '-translate-y-full')) {
                // Scrolling down
                elements.nav.classList.add('-translate-y-full');
            } else if (currentScroll < lastScroll && elements.nav.classList
                .contains('-translate-y-full')) {
                // Scrolling up
                elements.nav.classList.remove('-translate-y-full');
            }
            lastScroll = currentScroll;
        });
    });
</script>
