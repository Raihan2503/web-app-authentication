<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="font-bold text-2xl">{{ __("Selamat Datang ". Auth::user()->name) }}</h1>
                    <h3 class="font-bold text-xl text-slate-200">Role sebagai, {{ Auth::user()->role }}</h3>
                    <p class="max-w-xg font-light">Aplikasi web ini merupakan aplikasi web sederhana dimana didalamnya sudah menerapkan 2 fitur Lupa Password dan Remember Me.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
