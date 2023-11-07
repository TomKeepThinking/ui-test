<x-app-layout>
    <x-nav/>


    <x-page-header>
        <h1>Innovative digital solutions to help preserve and shape  culture and heritage</h1>
    </x-page-header>

    <div x-cloak x-data="{ open: false }">
        <button @click="open = ! open">Expands</button>

        <div x-show="open" x-transition>
            Content...
        </div>
    </div>
</x-app-layout>
