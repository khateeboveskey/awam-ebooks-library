@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="w-full">
                <div
                    class="rounded-lg bg-white shadow-lg transition-shadow duration-300 hover:shadow-xl">
                    <div class="flex items-center justify-between border-b px-6 py-4">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $book->title }}</h3>
                    </div>

                    <div class="p-4 sm:p-6 lg:p-8">
                        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                            <div class="aspect-w-2 aspect-h-3 overflow-hidden rounded-lg bg-gray-100">
                                <img src="https://via.placeholder.com/400x600" alt="{{ $book->title }}"
                                    class="h-full w-full transform object-cover transition-transform duration-300 hover:scale-105">
                            </div>
                            <div class="space-y-6">
                                <div
                                    class="rounded-lg bg-gray-50 p-4 transition-colors duration-200 hover:bg-gray-100">
                                    <h4 class="mb-2 text-xl font-semibold text-gray-900">المؤلف</h4>
                                    <p class="text-lg text-gray-700">{{ $book->author }}</p>
                                </div>
                                <div
                                    class="rounded-lg bg-gray-50 p-4 transition-colors duration-200 hover:bg-gray-100">
                                    <h4 class="mb-2 text-xl font-semibold text-gray-900">سنة النشر</h4>
                                    <p class="text-lg text-gray-700">{{ $book->year_published }}</p>
                                </div>
                                <div
                                    class="rounded-lg bg-gray-50 p-4 transition-colors duration-200 hover:bg-gray-100">
                                    <h4 class="mb-2 text-xl font-semibold text-gray-900">الوصف</h4>
                                    <p class="text-lg leading-relaxed text-gray-700">
                                        {{ $book->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
