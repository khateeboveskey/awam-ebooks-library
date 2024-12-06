@extends('layouts.app')
@section('title', 'المؤلفون')

@section('content')
    <div class="container mx-auto px-4 py-12">

        <h2
            class="mb-4 text-center text-xl font-bold text-primary-100 dark:text-primary-900 sm:mb-6 sm:text-2xl md:text-3xl">
            المؤلفون
        </h2>

        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6">
            @foreach ($authors as $author)
                <x-author.card :author="$author" />
            @endforeach
        </div>
    </div>
@endsection
