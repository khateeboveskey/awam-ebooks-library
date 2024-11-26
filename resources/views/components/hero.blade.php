<section
    class="relative rounded-b-2xl bg-primary-900 p-10 before:absolute before:inset-x-0 before:bottom-full before:h-10 before:bg-primary-900">
    <form action="/search" method="GET" class="flex items-center justify-center">
        <span
            class="flex w-full flex-row items-center overflow-hidden rounded-full bg-primary-700 p-1 md:w-3/4 lg:w-1/2">
            <i class="fa-solid fa-magnifying-glass ms-3 text-lg text-primary-400"></i>
            <input type="text" name="search"
                class="flex-1 rounded-full border-0 bg-inherit px-4 py-2 text-primary-200 outline-none placeholder:text-primary-400 focus:border-0 focus:outline-none focus:ring-0"
                placeholder="ابحث عن كتاب، كاتب، دار نشر... أو صنف">
        </span>
    </form>
    <x-musnad-pattern />
</section>
