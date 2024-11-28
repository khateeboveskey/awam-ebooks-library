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
        </div>
    </div>
@endsection
