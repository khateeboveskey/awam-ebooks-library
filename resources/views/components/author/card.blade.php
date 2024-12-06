@props(['author'])

<a href="{{ route('authors.show', $author->slug) }}"
    class="flex flex-col items-center rounded-lg bg-white p-4 transition duration-300 hover:bg-primary-50 hover:shadow-lg dark:bg-primary-800 dark:hover:bg-primary-700 sm:p-6">
    <div class="mb-3 h-20 w-20 sm:mb-4 sm:h-28 sm:w-28 md:h-32 md:w-32">
        <img src="https://ui-avatars.com/api/?name={{ urlencode($author->name) }}"
            alt="{{ $author->name }}" class="h-full w-full rounded-full object-cover shadow-md">
    </div>
    <h3 class="text-base text-primary-900 dark:text-primary-100 sm:text-lg md:text-xl">
        {{ $author->name }}
    </h3>
    <p class="mt-1 text-sm text-primary-600 dark:text-primary-300 sm:mt-2 sm:text-base">
        {{ $author->books->count() }} كتاب </p>
</a>
