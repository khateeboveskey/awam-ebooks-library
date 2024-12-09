@props(['singleName', 'pluralName', 'migrationName'])

<div class="mx-auto mb-4 flex max-w-7xl flex-row items-center justify-between gap-4 sm:px-6 lg:px-8">
    <h2 class="text-xl font-bold text-primary-800 sm:text-2xl md:text-3xl">إدارة
        ال{{ $pluralName }}
    </h2>
    <a href="{{ route('admin.' . $migrationName . '.create') }}"
        class="inline-flex w-fit items-center justify-center rounded-lg bg-primary-600 px-3 py-2 text-sm text-white transition-all duration-200 hover:bg-primary-700 focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 sm:w-auto sm:px-4 sm:py-2 md:px-6 md:py-3 md:text-base">
        <i class="fas fa-plus me-2"></i>
        <span>إضافة {{ $singleName }} جديد</span>
    </a>
</div>
