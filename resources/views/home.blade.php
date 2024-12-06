@extends('layouts.app')
@section('title', 'الرئيسية')

@section('content')
    <x-hero />
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="w-full space-y-8">
                <!-- Recent Books Section -->
                <div class="rounded-xl bg-white shadow-lg transition-shadow hover:shadow-xl">
                    <div class="flex items-center justify-between border-b border-gray-100 px-6 py-4">
                        <h3 class="text-2xl font-bold text-gray-800">المضافة حديثاً</h3>
                        <a href="{{ route('books.index') }}"
                            class="text-primary-600 hover:text-primary-800">عرض
                            الكل...</a>
                    </div>

                    <div class="p-6">
                        @if (session('success'))
                            <div class="mb-6 rounded-lg border border-green-400 bg-green-100 px-4 py-3 text-green-700 shadow-sm"
                                role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div
                            class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                            @forelse ($recentBooks as $book)
                                <x-book.card :book="$book" />
                            @empty
                                <div class="col-span-full rounded-lg bg-gray-50 p-8 text-center">
                                    <p class="text-lg text-gray-500">لا يوجد كتب</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <!-- Recent Authors Section -->
                <div class="rounded-xl bg-white shadow-lg transition-shadow hover:shadow-xl">
                    <div class="flex items-center justify-between border-b border-gray-100 px-6 py-4">
                        <h3 class="text-2xl font-bold text-gray-800">المؤلفون</h3>
                        <a href="{{ route('authors.index') }}"
                            class="text-primary-600 hover:text-primary-800">عرض الكل...</a>
                    </div>
                    <div class="p-6">
                        <div
                            class="grid grid-cols-2 gap-6 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
                            @foreach ($recentAuthors as $author)
                                <x-author.card :author="$author" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
