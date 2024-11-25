<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-din-medium">
    @include('layouts.navigation')
    <!-- Page Content -->
    <main class="px-5 pt-5 lg:px-44">
        {{ $slot }}
    </main>
</body>

</html>
