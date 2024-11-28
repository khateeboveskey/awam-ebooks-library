@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="w-full">
                <div class="rounded-lg bg-white shadow">
                    <div class="flex items-center justify-between border-b px-6 py-4">
                        <h3 class="text-xl font-semibold">أشهر الكتب</h3>
                    </div>

                    <div class="p-6">
                        @if (session('success'))
                            <div class="mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
                                role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6">
                            @forelse ($books as $book)
                                <div
                                    class="overflow-hidden rounded-lg border bg-white shadow transition-all hover:shadow-lg">
                                    <a href="{{ route('books.show', $book) }}"
                                        class="overflow-hidden rounded-lg border bg-white shadow transition-all hover:shadow-lg">
                                        <div class="aspect-w-2 aspect-h-3 bg-gray-200">
                                            <img src="{{ asset('imgs/books-covers/' . $book->id . '.' . (file_exists(public_path('imgs/books-covers/' . $book->id . '.png')) ? 'png' : 'jpg')) }}"
                                                alt="{{ $book->title }}" class="object-cover">
                                        </div>
                                        <div class="p-3">
                                            <h3
                                                class="mb-1 text-center text-lg font-semibold text-gray-900">
                                                {{ $book->title }}</h3>
                                            <p class="text-center text-xs text-gray-600">
                                                {{ $book->authors->pluck('name')->join(' و') }}</p>
                                            <p class="mt-1 text-center text-xs text-gray-500">
                                                {{ $book->year_published }}</p>
                                        </div>
                                    </a>
                                </div>
                            @empty
                                <div class="col-span-full text-center text-gray-500">
                                    لا يوجد كتب
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
