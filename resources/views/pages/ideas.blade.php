<x-app-layout>

    <div class="border-b border-concrete mb-8 pb-8">
        <x-container>
            <x-page-header class="w-2/3 pb-6 pt-32">
                <h1>Latest at the studio</h1>
            </x-page-header>
        </x-container>
    </div>

    <x-container>
        <livewire:projects-filter :items="$projects"/>
    </x-container>
</x-app-layout>
