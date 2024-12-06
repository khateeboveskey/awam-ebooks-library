@extends('layouts.app')
@section('title', 'التصنيفات')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="mx-auto max-w-6xl">
            <div class="rounded-lg bg-white shadow-lg">
                <div class="rounded-t-lg border-b border-primary-100 bg-primary-50 px-6 py-4">
                    <h2 class="text-2xl font-bold text-primary-800">التصنيفات</h2>
                </div>

                <div class="p-6">
                    @if ($categories->count() > 0)
                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                            @foreach ($categories as $category)
                                <a href="{{ route('categories.show', $category) }}"
                                    class="flex items-center justify-center rounded-lg border border-primary-200 bg-white p-4 text-center shadow-sm transition duration-300 ease-in-out hover:bg-primary-50 hover:shadow-md">
                                    <span class="text-lg font-medium text-primary-700">{{ $category->name }}</span>
                                </a>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center text-gray-600">لا توجد تصنيفات</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection