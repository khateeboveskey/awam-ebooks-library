@extends('layouts.app')

@section('content')
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center">
            <div class="w-full">
                <div class="rounded-lg bg-white shadow">
                    <div class="flex items-center justify-between border-b px-6 py-4">
                        <h3 class="text-xl font-semibold">إضافة كتاب جديد</h3>
                    </div>

                    <div class="p-6">
                        <form action="{{ route('books.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="space-y-6">
                                <div>
                                    <label for="title"
                                        class="block text-sm font-medium text-gray-700">عنوان
                                        الكتاب</label>
                                    <input id="title" type="text" name="title"
                                        value="{{ old('title') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    @error('title')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="authors"
                                        class="block text-sm font-medium text-gray-700">المؤلفون</label>
                                    <input id="authors" list="authors-list" name="authors[]" multiple
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    <datalist id="authors-list">
                                        @foreach ($authors as $author)
                                            <option value="{{ $author->name }}"
                                                data-id="{{ $author->id }}">
                                        @endforeach
                                    </datalist>
                                    @error('authors')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="year_published"
                                        class="block text-sm font-medium text-gray-700">سنة
                                        النشر</label>
                                    <input id="year_published" type="number" name="year_published"
                                        value="{{ old('year_published') }}"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    @error('year_published')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700">الوصف</label>
                                    <textarea id="description" name="description" rows="4"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">{{ old('description') }}</textarea>
                                    @error('description')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="cover"
                                        class="block text-sm font-medium text-gray-700">صورة
                                        الغلاف</label>
                                    <input id="cover" type="file" name="cover"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-500 focus:ring-primary-500">
                                    @error('cover')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="flex justify-end">
                                    <button type="submit"
                                        class="inline-flex items-center rounded-md border border-transparent bg-primary-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                                        إضافة الكتاب
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
