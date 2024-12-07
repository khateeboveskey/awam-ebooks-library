@extends('layouts.admin')
@section('title', 'إدارة الكتب')

@section('admin-content')
    <x-admin.model-header singleName="كتاب" pluralName="كتب" migrationName="books" />
    <x-admin.table :items="$books" :columns="[
        ['label' => 'الاسم', 'value' => fn($book) => $book->title],
        ['label' => 'سنة النشر', 'value' => fn($book) => $book->year_published],
        ['label' => 'المؤلف', 'value' => fn($book) => $book->authors->pluck('name')->implode('و')],
    ]" :routes="['show' => 'books.show']" />
@endsection
