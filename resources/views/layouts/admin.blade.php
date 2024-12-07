@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen flex-col bg-gray-100 md:flex-row">
        <!-- Sidebar -->
        <x-admin.sidebar />

        <!-- Main Content -->
        <div class="flex-1 p-4 md:p-8">
            @yield('admin-content')
        </div>
    </div>
@endsection
