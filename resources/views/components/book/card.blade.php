@props(['book'])

<div class="overflow-hidden rounded-lg border bg-white shadow transition-all hover:shadow-lg sm:max-w-sm">
    <a href="{{ route('books.show', $book) }}">
        <div class="aspect-w-2 aspect-h-3 bg-gray-200">
            <img src="{{ asset('imgs/books-covers/' . $book->id . '.' . (file_exists(public_path('imgs/books-covers/' . $book->id . '.png')) ? 'png' : 'jpg')) }}"
                alt="{{ $book->title }}" class="h-full w-full object-cover">
        </div>
        <div class="p-3">
            <h3 class="mb-1 text-center text-base sm:text-lg font-semibold text-gray-900 line-clamp-2">
                {{ $book->title }}</h3>
            <p class="text-center text-xs sm:text-sm text-gray-600 line-clamp-1">
                {{ $book->authors->pluck('name')->join(' و') }}</p>
            <p class="mt-1 text-center text-xs sm:text-sm text-gray-500">
                {{ $book->year_published }}</p>
        </div>
    </a>
</div>