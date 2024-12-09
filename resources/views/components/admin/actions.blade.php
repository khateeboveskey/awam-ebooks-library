@props(['item', 'routes'])

<div class="flex items-center gap-3 sm:gap-4">
    <a href="{{ route($routes['show'], $item) }}" target="_blank"
        class="inline-flex items-center rounded-md bg-green-100 px-3 py-1.5 text-green-600 transition-colors duration-200 hover:bg-green-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
        <i class="fas fa-eye me-2 text-base sm:text-lg"></i>
        <span>عرض</span>
    </a>
    <a href="route($routes['edit'], $item)"
        class="inline-flex items-center rounded-md bg-blue-100 px-3 py-1.5 text-blue-600 transition-colors duration-200 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
        <i class="fas fa-edit me-2 text-base sm:text-lg"></i>
        <span>تعديل</span>
    </a>
    <form action="{{ route($routes['destroy'], $item) }}" method="POST" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit"
            class="inline-flex items-center rounded-md bg-red-100 px-3 py-1.5 text-red-600 transition-colors duration-200 hover:bg-red-200 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
            onclick="return confirm('هل أنت متأكد من حذف هذا العنصر؟')">
            <i class="fas fa-trash me-2 text-base sm:text-lg"></i>
            <span>حذف</span>
        </button>
    </form>
</div>
