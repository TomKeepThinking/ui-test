<x-app-layout>
    hello!

    <div x-cloak x-data="{ open: false }">
        <button @click="open = ! open">Expands</button>

        <div x-show="open" x-transition>
            Content...
        </div>
    </div>
</x-app-layout>
