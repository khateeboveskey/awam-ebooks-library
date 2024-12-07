@extends('layouts.admin')
@section('title', 'لوحة التحكم')

@section('admin-content')
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 md:gap-6">
        <!-- Books Stats -->
        <div class="rounded-lg bg-white p-4 shadow-md md:p-6">
            <div class="iteme-center flex justify-between">
                <h3 class="text-base font-semibold text-gray-800 md:text-lg"><i
                        class="fas fa-book-open me-2"></i>الكتب</h3>
                <span
                    class="text-xl font-bold text-primary-600 md:text-2xl">{{ \App\Models\Book::count() }}</span>
            </div>
            <a href="{{ 'admin.books.create' }}"
                class="mt-4 inline-block rounded bg-primary-500 px-3 py-1 text-sm text-white hover:bg-primary-600 md:px-4 md:py-2 md:text-base">
                <i class="fas fa-plus me-1"></i>إضافة كتاب جديد
            </a>
        </div>

        <!-- Authors Stats -->
        <div class="rounded-lg bg-white p-4 shadow-md md:p-6">
            <div class="iteme-center flex justify-between">
                <h3 class="text-base font-semibold text-gray-800 md:text-lg"><i
                        class="fas fa-user-edit me-2"></i>المؤلفون</h3>
                <span
                    class="text-xl font-bold text-primary-600 md:text-2xl">{{ \App\Models\Author::count() }}</span>
            </div>
            <a href="{{ 'admin.authors.create' }}"
                class="mt-4 inline-block rounded bg-primary-500 px-3 py-1 text-sm text-white hover:bg-primary-600 md:px-4 md:py-2 md:text-base">
                <i class="fas fa-plus me-1"></i>إضافة مؤلف جديد
            </a>
        </div>

        <!-- Categories Stats -->
        <div class="rounded-lg bg-white p-4 shadow-md md:p-6">
            <div class="iteme-center flex justify-between">
                <h3 class="text-base font-semibold text-gray-800 md:text-lg"><i
                        class="fas fa-folder me-2"></i>التصنيفات</h3>
                <span
                    class="text-xl font-bold text-primary-600 md:text-2xl">{{ \App\Models\Category::count() }}</span>
            </div>
            <a href="{{ 'admin.categories.create' }}"
                class="mt-4 inline-block rounded bg-primary-500 px-3 py-1 text-sm text-white hover:bg-primary-600 md:px-4 md:py-2 md:text-base">
                <i class="fas fa-plus me-1"></i>إضافة تصنيف جديد
            </a>
        </div>
    </div>

    <!-- Recent Books -->
    <div class="mt-6 rounded-lg bg-white p-4 shadow-md md:mt-8 md:p-6">
        <h3 class="mb-4 text-base font-semibold text-gray-800 md:text-lg"><i
                class="fas fa-clock me-2"></i>آخر الكتب المضافة</h3>
        <div class="overflow-x-auto">
            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-gray-50">
                        <th class="px-2 py-2 text-right text-sm md:px-4 md:text-base"><i
                                class="fas fa-heading me-1"></i>العنوان</th>
                        <th class="px-2 py-2 text-right text-sm md:px-4 md:text-base"><i
                                class="fas fa-user me-1"></i>المؤلف</th>
                        <th class="px-2 py-2 text-right text-sm md:px-4 md:text-base"><i
                                class="fas fa-tag me-1"></i>التصنيف</th>
                        <th class="px-2 py-2 text-right text-sm md:px-4 md:text-base"><i
                                class="fas fa-calendar-alt me-1"></i>سنة النشر</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\Book::with(['authors', 'category'])->latest()->take(5)->get() as $book)
                        <tr class="border-b">
                            <td class="px-2 py-2 text-sm md:px-4 md:text-base">
                                {{ $book->title }}</td>
                            <td class="px-2 py-2 text-sm md:px-4 md:text-base">
                                {{ $book->authors->pluck('name')->implode(', ') }}</td>
                            <td class="px-2 py-2 text-sm md:px-4 md:text-base">
                                {{ $book->category->name }}</td>
                            <td class="px-2 py-2 text-sm md:px-4 md:text-base">
                                {{ $book->year_published }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
