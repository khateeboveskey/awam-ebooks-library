<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">

    <div class="overflow-x-auto rounded-lg border border-primary-200">
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-primary-200">
                    <thead class="bg-primary-400">
                        <tr>
                            @foreach ($columns as $column)
                                <th
                                    class="px-3 py-3 text-right text-sm font-semibold text-primary-50 sm:px-6 sm:py-4 sm:text-base">
                                    {{ $column['label'] }}
                                </th>
                            @endforeach
                            <th
                                class="px-3 py-3 text-right text-sm font-semibold text-primary-50 sm:px-6 sm:py-4 sm:text-base">
                                الإجراءات
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-primary-200">
                        @foreach ($items as $item)
                            <tr class="odd:bg-white even:bg-primary-50 hover:bg-primary-100">
                                @foreach ($columns as $column)
                                    <td
                                        class="whitespace-nowrap px-3 py-2 text-sm text-primary-800 sm:px-6 sm:py-4 sm:text-base">
                                        {!! $column['value']($item) !!}
                                    </td>
                                @endforeach
                                <td class="px-3 py-2 sm:px-6 sm:py-4">
                                    <div class="flex items-center gap-3 sm:gap-4">
                                        <a href="{{ route($routes['show'], $item) }}"
                                            target="_blank"
                                            class="inline-flex items-center text-green-600 transition-colors duration-200 hover:text-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                                            <i class="fas fa-eye text-base sm:text-lg"></i>
                                        </a>
                                        <a href="route($routes['edit'], $item)"
                                            class="inline-flex items-center text-blue-600 transition-colors duration-200 hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                                            <i class="fas fa-edit text-base sm:text-lg"></i>
                                        </a>
                                        <form action="route($routes['destroy'], $item)"
                                            method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="inline-flex items-center text-red-600 transition-colors duration-200 hover:text-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                                                onclick="return confirm('هل أنت متأكد من حذف هذا العنصر؟')">
                                                <i class="fas fa-trash text-base sm:text-lg"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
