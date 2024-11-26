<footer class="rounded-t-2xl bg-primary-100 dark:bg-primary-900">
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 text-primary-900 dark:text-white md:grid-cols-3">
            <div>
                <h3 class="mb-3 font-serif text-4xl text-white">{{ config('app.name', '❗❗❗') }}</h3>
                <p class="text-sm text-primary-400">{{ config('app.description', '❗❗❗') }}</p>
            </div>

            <div>
                <h3 class="mb-4 font-din-bold text-lg">روابط سريعة</h3>
                <ul class="space-y-2">
                    <li><a href="#"
                            class="text-sm text-primary-400 transition hover:text-primary-500">الرئيسية</a>
                    </li>
                    <li><a href="{{ route('books.index') }}"
                            class="text-sm text-primary-400 transition hover:text-primary-500">تصفح
                            الكتب</a></li>
                    <li><a href="#"
                            class="text-sm text-primary-400 transition hover:text-primary-500">الأقسام</a>
                    </li>
                    <li><a href="#"
                            class="text-sm text-primary-400 transition hover:text-primary-500">تواصل
                            معنا</a></li>
                </ul>
            </div>

            <div>
                <h3 class="mb-4 font-din-bold text-lg">تابعنا</h3>
                <div class="flex space-x-4 space-x-reverse">
                    <a href="#"
                        class="text-primary-400 transition hover:text-primary-500 dark:text-white">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="mt-8 border-t border-primary-200 pt-8 text-center text-sm text-primary-900 dark:border-primary-700 dark:text-primary-400">
            <p>جميع الحقوق محفوظة ل{{ config('app.name', '❗❗❗') }} © {{ date('Y') }}</p>
        </div>
    </div>
</footer>
