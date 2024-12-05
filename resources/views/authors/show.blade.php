@extends('layouts.app')
@section('title', $author->name)

@section('content')
    <div class="py-6 sm:py-12">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="overflow-hidden rounded-lg bg-white shadow-sm dark:bg-primary-800">

                <div class="p-4 sm:p-6">
                    <h2 class="text-2xl font-bold text-primary-900 dark:text-primary-100 sm:text-3xl">
                        {{ $author->name }}
                    </h2>
                    @if ($author->bio)
                        <p
                            class="mt-3 text-sm text-primary-600 dark:text-primary-300 sm:mt-4 sm:text-base">
                            {{ $author->bio }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="mt-6 sm:mt-8">
                <h3 class="mb-3 text-lg font-semibold text-primary-900 sm:mb-4 sm:text-xl">
                    كتب المؤلف
                </h3>
                <div
                    class="grid grid-cols-2 gap-3 sm:grid-cols-3 sm:gap-4 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
                    @forelse ($author->books as $book)
                        <x-book.card :book="$book" />
                    @empty
                        <div class="col-span-full text-center text-gray-500">
                            لا يوجد كتب
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
