<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" {{$attributes}}>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbo-eval="false"></script>
</body>
</html>
