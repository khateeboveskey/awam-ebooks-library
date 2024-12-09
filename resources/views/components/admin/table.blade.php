<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
    @if (session('success'))
        <div class="mb-4 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
            role="alert">
            {{ session('success') }}
        </div>
    @endif
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
                            <tr class="odd:bg-white even:bg-primary-50">
                                @foreach ($columns as $column)
                                    <td
                                        class="whitespace-nowrap px-3 py-2 text-sm text-primary-800 sm:px-6 sm:py-4 sm:text-base">
                                        {!! $column['value']($item) !!}
                                    </td>
                                @endforeach
                                <td class="px-3 py-2 sm:px-6 sm:py-4">
                                    <x-admin.actions :routes="$routes" :item="$item" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
