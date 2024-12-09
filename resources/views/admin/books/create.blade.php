@extends('layouts.admin')
@section('title', 'إدارة الكتب')

@section('admin-content')
    <div class="container mx-auto px-4 py-6">
        <div class="rounded-lg bg-white p-6 shadow-lg">
            <h2 class="mb-6 text-2xl font-bold text-gray-800">إضافة كتاب جديد</h2>

            <form action="{{ route('admin.books.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <label for="title" class="mb-2 block text-sm font-medium text-gray-700">عنوان
                            الكتاب</label>
                        <input id="title" type="text" name="title" required
                            class="@error('title') border-red-500 @enderror w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary-500 focus:ring-primary-500"
                            value="{{ old('title') }}">
                        @error('title')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="year_published"
                            class="mb-2 block text-sm font-medium text-gray-700">سنة النشر</label>
                        <input id="year_published" type="number" name="year_published" required
                            class="@error('year_published') border-red-500 @enderror w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary-500 focus:ring-primary-500"
                            value="{{ old('year_published') }}">
                        @error('year_published')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="cover_image" class="mb-2 block text-sm font-medium text-gray-700">صورة الغلاف</label>
                        <input id="cover_image" type="file" name="cover_image" accept="image/*"
                            class="@error('cover_image') border-red-500 @enderror w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary-500 focus:ring-primary-500">
                        @error('cover_image')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="md:col-span-2">
                        <label for="description"
                            class="mb-2 block text-sm font-medium text-gray-700">وصف الكتاب</label>
                        <textarea id="description" name="description" rows="4" required
                            class="@error('description') border-red-500 @enderror w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary-500 focus:ring-primary-500">{{ old('description') }}</textarea>
                        @error('description')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="category_id"
                            class="mb-2 block text-sm font-medium text-gray-700">التصنيف</label>
                        <select id="category_id" name="category_id" required
                            class="@error('category_id') border-red-500 @enderror w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary-500 focus:ring-primary-500">
                            <option value="">اختر التصنيف</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="author_id"
                            class="mb-2 block text-sm font-medium text-gray-700">المؤلف</label>
                        <select id="author_id" name="author_id" required
                            class="select2 @error('author_id') border-red-500 @enderror w-full rounded-md border border-gray-300 px-4 py-2 focus:border-primary-500 focus:ring-primary-500">
                            <option value="">اختر المؤلف</option>
                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}"
                                    {{ old('author_id') == $author->id ? 'selected' : '' }}>
                                    {{ $author->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('author_id')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-end space-x-4 space-x-reverse">
                    <button type="submit"
                        class="rounded-md bg-primary-600 px-6 py-2 text-white hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                        حفظ
                    </button>
                    <a href="{{ 'admin.books.index' }}"
                        class="rounded-md bg-gray-100 px-6 py-2 text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                        إلغاء
                    </a>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                dir: "rtl",
                placeholder: "اختر المؤلف",
                allowClear: true
            });
        });
    </script>
@endpush