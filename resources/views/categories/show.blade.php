@extends('layouts.app')
@section('title', 'كتب ' . $category->name)

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4 mb-6">
            <h3 class="text-2xl font-bold text-gray-800">كتب {{ $category->name }}</h3>
        </div>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
            @forelse ($category->books as $book)
                <x-book.card :book="$book" />
            @empty
                <div class="col-span-full flex flex-col items-center justify-center space-y-4 py-12">
                    <p class="text-lg text-gray-500">
                        لا يوجد كتب في هذا التصنيف
                    </p>
                    <a class="inline-flex items-center rounded-md bg-primary-600 px-6 py-2 text-white transition hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2"
                        href="{{ route('categories.index') }}">
                        استعراض جميع التصنيفات
                    </a>
                </div>
            @endforelse
        </div>
    </div>
@endsection