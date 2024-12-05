@extends('layouts.app')
@section('title', 'الملف الشخصي')

@section('content')
    <!-- Profile Header -->
    <div class="container mx-auto px-4 py-8 sm:py-12">
        <div class="grid grid-cols-1 gap-4 sm:gap-6 lg:grid-cols-12">
            <div class="lg:col-span-4">
                <div class="mb-4 rounded-lg bg-white p-4 shadow sm:mb-6 sm:p-6">
                    <div class="text-center">
                        <img src="https://avatar.iran.liara.run/public/boy" alt="avatar"
                            class="mx-auto h-24 w-24 rounded-full object-cover sm:h-36 sm:w-36">
                        <h5 class="my-2 text-lg font-semibold sm:my-3 sm:text-xl">
                            {{ Auth::user()->name }}</h5>
                        <p class="text-sm text-primary-600 sm:text-base">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-8">
                <div class="mb-4 rounded-lg bg-white p-4 shadow sm:mb-6 sm:p-6">
                    <div class="space-y-3 sm:space-y-4">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-12 sm:gap-4">
                            <div class="sm:col-span-3">
                                <p class="text-sm font-medium sm:text-base">الاسم الكامل</p>
                            </div>
                            <div class="sm:col-span-9">
                                <p class="text-sm text-primary-600 sm:text-base">
                                    {{ Auth::user()->name }}</p>
                            </div>
                        </div>
                        <hr class="border-primary-200">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-12 sm:gap-4">
                            <div class="sm:col-span-3">
                                <p class="text-sm font-medium sm:text-base">البريد الإلكتروني</p>
                            </div>
                            <div class="sm:col-span-9">
                                <p class="text-sm text-primary-600 sm:text-base">
                                    {{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <hr class="border-primary-200">
                        <div class="grid grid-cols-1 gap-2 sm:grid-cols-12 sm:gap-4">
                            <div class="sm:col-span-3">
                                <p class="text-sm font-medium sm:text-base">تاريخ الانضمام</p>
                            </div>
                            <div class="sm:col-span-9">
                                <p class="text-sm text-primary-600 sm:text-base">
                                    {{ Auth::user()->created_at->format('Y-m-d') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ route('profile.edit') }}"
                        class="inline-flex items-center rounded-lg bg-primary-600 px-3 py-1.5 text-sm font-semibold text-white transition-colors hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2 sm:px-4 sm:py-2 sm:text-base">تعديل
                        الملف الشخصي</a>
                </div>
            </div>
        </div>
    </div>
@endsection
