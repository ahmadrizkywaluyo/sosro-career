<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Sosro')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-900">

    {{-- Navbar --}}
    <nav class="bg-red-700 text-white sticky top-0 z-50 shadow-md">
        <div class="container mx-auto flex justify-between items-center px-6 py-3">
            <div class="font-bold text-xl">Sosro</div>
            <ul class="flex space-x-6">
                <li><a href="{{ route('beranda') }}" class="hover:text-gray-200">Beranda</a></li>
                <li><a href="{{ route('tentang') }}" class="hover:text-gray-200">Tentang</a></li>
                <li><a href="{{ route('program') }}" class="hover:text-gray-200">Program</a></li>
                <li><a href="{{ route('lowongan') }}" class="hover:text-gray-200">Lowongan</a></li>
                <li><a href="{{ route('kontak') }}" class="hover:text-gray-200">Kontak</a></li>
            </ul>
            <div class="flex items-center space-x-4">
                {{-- Translate --}}
                <select class="bg-red-700 border border-white rounded px-2 py-1 text-sm">
                    <option>ID</option>
                    <option>EN</option>
                </select>

                {{-- Tombol masuk --}}
                <a href="{{ route('login') }}" class="bg-white text-red-700 px-3 py-1 rounded font-semibold hover:bg-gray-100">
                    Masuk
                </a>
            </div>
        </div>
    </nav>

    {{-- Konten halaman --}}
    <main class="container mx-auto px-6 py-8">
        @yield('content')
    </main>

</body>
</html>
