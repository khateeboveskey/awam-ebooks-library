@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-primary-800 sm:rounded-lg">
                <div class="p-6">
                    <h2 class="mb-6 text-2xl font-bold text-primary-900 dark:text-primary-100">المؤلفون
                    </h2>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                        @foreach ($authors as $author)
                            <a href="{{ route('authors.show', $author) }}"
                                class="dark:hover:textprim block rounded-lg bg-primary-50 p-6 transition duration-150 hover:bg-primary-100 dark:bg-primary-700 dark:hover:bg-primary-900">
                                <h3 class="text-xl font-semibold text-primary-900 dark:text-primary-100">
                                    {{ $author->name }}
                                </h3>
                                <p class="mt-2 text-primary-600 dark:text-primary-300">
                                    {{ $author->books->count() }} كتاب </p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
