<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    @class([
        'dark' => request()->routeIs('pages.qi'),
    ])>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans text-lg font-medium antialiased">
    <div class="min-h-screen bg-white dark:bg-black">
        <x-nav/>

        <main>
            {{ $slot }}
        </main>

        <x-footer/>
    </div>
    @livewireScripts
</body>
</html>
