<nav x-data="{ open: false }"
    class="rounded-b-2xl border-b border-primary-100 bg-white px-5 pb-2 dark:border-primary-700 dark:bg-primary-900 sm:pb-0 lg:px-44">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl">
        <div class="flex h-16 justify-between">
            <div class="flex">
                <!-- Logo -->
                <div class="flex shrink-0 items-center">
                    <a href="{{ route('home') }}">
                        <h1 class="font-serif text-4xl text-white">مكتبة أوام</h1>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden gap-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        الرئيسية
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        أشهر الكتب
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        الأقسام
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        المؤلفون
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:ms-6 sm:flex sm:items-center">
                @auth
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center rounded-md border border-transparent bg-white px-3 py-2 text-sm font-medium leading-4 text-primary-500 transition duration-150 ease-in-out hover:text-primary-700 focus:outline-none dark:bg-primary-800 dark:text-primary-400 dark:hover:text-primary-300">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                الملف الشخصي
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    تسجيل الخروج
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                @endauth
                @guest
                    <div class="flex flex-row gap-x-3">
                        <a href="{{ route('login') }}"
                            class="rounded-lg border border-white px-4 py-1.5 text-white">تسجيل
                            الدخول</a>
                        <a href="{{ route('register') }}" class="rounded-lg bg-white px-4 py-1.5">إنشاء
                            حساب</a>
                    </div>
                @endguest
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button id="menuToggle"
                    class="inline-flex items-center justify-center rounded-md p-2 text-primary-400 transition duration-150 ease-in-out hover:bg-primary-100 hover:text-primary-500 focus:bg-primary-100 focus:text-primary-500 focus:outline-none dark:text-primary-500 dark:hover:bg-primary-900 dark:hover:text-primary-400 dark:focus:bg-primary-900 dark:focus:text-primary-400">
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

    <!-- Responsive Navigation Menu -->
    <div id="responsiveMenu"
        class="fixed left-0 right-0 top-16 z-50 hidden rounded-b-2xl bg-white shadow-lg dark:bg-primary-900">
        @guest
            <div class="space-y-1 pb-3 pt-2">
                <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                    تسجيل الدخول
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" :active="request()->routeIs('register')">
                    إنشاء حساب
                </x-responsive-nav-link>
            </div>
        @endguest

        @auth
            <!-- Responsive Settings Options -->
            <div class="border-primary-200 pb-4 pt-4 dark:border-primary-600">
                <div class="px-4">
                    <div class="text-base font-medium text-primary-800 dark:text-primary-200">
                        {{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-primary-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        الملف الشخصي
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            تسجيل الخروج
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @endauth
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('menuToggle');
        const nav = document.querySelector("nav");
        const menuOpen = document.getElementById('menuOpen');
        const menuClose = document.getElementById('menuClose');
        const responsiveMenu = document.getElementById('responsiveMenu');
        let isOpen = false;

        menuToggle.addEventListener('click', function() {
            isOpen = !isOpen;
            if (isOpen) {
                nav.classList.remove('rounded-b-2xl');
                menuOpen.classList.remove('inline-flex');
                menuOpen.classList.add('hidden');
                menuClose.classList.remove('hidden');
                menuClose.classList.add('inline-flex');
                responsiveMenu.classList.remove('hidden');
            } else {
                nav.classList.add('rounded-b-2xl');
                menuOpen.classList.remove('hidden');
                menuOpen.classList.add('inline-flex');
                menuClose.classList.remove('inline-flex');
                menuClose.classList.add('hidden');
                responsiveMenu.classList.add('hidden');
            }
        });
    });
</script>
