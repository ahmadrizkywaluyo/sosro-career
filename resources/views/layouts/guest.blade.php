<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <nav class="bg-white border-b border-gray-200 shadow-sm">
            <div class="max-w-7xl mx-auto px-4 py-3 flex justify-between items-center">
                <a href="{{ route('beranda') }}" class="text-xl font-bold text-red-600">Sosro Career</a>
                <div class="space-x-6">
                <a href="{{ route('beranda') }}" class="hover:text-red-600">Beranda</a>
                <a href="{{ route('lowongan') }}" class="hover:text-red-600">Lowongan</a>
                <a href="{{ route('program') }}" class="hover:text-red-600">Program Kami</a>
                <a href="{{ route('tentang') }}" class="hover:text-red-600">Tentang Kami</a>
                <a href="{{ route('login') }}" class="text-red-600 font-semibold">Masuk</a>
                </div>
            </div>
        </nav>  
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            {{-- <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current " />
                </a>
            </div> --}}

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>