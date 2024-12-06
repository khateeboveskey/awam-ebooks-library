@extends('layouts.app')
@section('title', $book->title)

@section('content')
    <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="w-full">
                <div class="rounded-lg border border-primary-300 bg-white shadow-lg duration-300">
                    <div class="flex items-center justify-between border-b px-6 py-4">
                        <h3 class="text-2xl font-bold text-gray-900">{{ $book->title }}</h3>
                    </div>

                    <div class="p-4 sm:p-6 lg:p-8">
                        <div class="grid w-fit grid-cols-1 gap-8 lg:grid-cols-2">
                            <img src="{{ asset('imgs/books-covers/' . $book->id . '.' . (file_exists(public_path('imgs/books-covers/' . $book->id . '.png')) ? 'png' : 'jpg')) }}"
                                alt="{{ $book->title }}"
                                class="w-full transform rounded-xl object-cover transition-transform duration-300 md:w-64">
                            <div class="space-y-6">
                                <div class="rounded-lg bg-gray-50 p-4 transition-colors duration-200">
                                    <h4 class="mb-2 text-xl font-semibold text-gray-900">المؤلف</h4>
                                    <p class="text-lg text-gray-700">
                                        @foreach ($book->authors as $author)
                                            <a class="text-primary-600 hover:underline"
                                                href="{{ route('authors.show', $author->slug) }}">{{ $author->name }}</a>
                                            @if (!$loop->last)
                                                {{ 'و' }}
                                            @endif
                                        @endforeach
                                    </p>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 transition-colors duration-200">
                                    <h4 class="mb-2 text-xl font-semibold text-gray-900">التصنيف</h4>
                                    <p class="text-lg text-gray-700">
                                        <a class="text-primary-600 hover:underline"
                                            href="{{ route('categories.show', $book->category) }}">{{ $book->category->name }}</a>
                                    </p>
                                </div>
                                <div class="rounded-lg bg-gray-50 p-4 transition-colors duration-200">
                                    <h4 class="mb-2 text-xl font-semibold text-gray-900">سنة النشر</h4>
                                    <p class="text-lg text-gray-700">{{ $book->year_published }}</p>
                                </div>
                                @isset($book->description)
                                    <div class="rounded-lg bg-gray-50 p-4 transition-colors duration-200">
                                        <h4 class="mb-2 text-xl font-semibold text-gray-900">الوصف</h4>
                                        <p class="text-lg leading-relaxed text-gray-700">
                                            {{ $book->description }}</p>
                                    </div>
                                @endisset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
