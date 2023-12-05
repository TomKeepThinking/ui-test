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
<body class="font-sans text-lg font-medium antialiased masthead">
    <div class="min-h-screen bg-white dark:bg-black">
        <div class="sticky z-20 top-0 w-full bg-white dark:bg-black h-20 ">
            @persist('nav')
                <livewire:nav-bar/>
            @endpersist
        </div>

        <main class="animate-container">
            {{ $slot }}
        </main>

        <x-footer/>
    </div>
    @livewireScripts

    <script>
        document.addEventListener('livewire:init', () => {
            console.log('test')
            // Runs after Livewire is loaded but before it's initialized
            // on the page...
        })

        document.addEventListener('livewire:initialized', () => {
            // Runs immediately after Livewire has finished initializing
            // on the page...

            console.log('test2')
        })
    </script>
</body>
</html>
