<x-app-layout>
    <div class="border-b border-concrete mb-6 ">
        <x-container>
            <x-page-header class="w-2/3 pb-12 pt-32">
                <h1>{{$pageHeader}}</h1>
            </x-page-header>
        </x-container>
    </div>

    <x-container>
        <livewire:grid-filter :items="$work" :$clients/>
    </x-container>

    <div class="mb-6 border-b border-concrete pb-4">
        <x-content.offset>
            <x-slot:left>
                <div class="mt-auto">
                    <h4>Qi Collections Management</h4>
                </div>
            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h4 class="pb-4">Meet Qi – the universal software that’s shaping the future of culture</h4>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset class="mb-28">
        <x-slot:left>
            <div class="text-grey">
                <p>Our diverse team of managers, engineers and designers work from our headquarters in London.</p>
                <x-link>Learn More</x-link>
            </div>
        </x-slot:left>
        <x-slot:right>
            <x-page-header>
                <img class="w-full" src="{{asset('/storage/images/white-board.png')}}" alt="">
            </x-page-header>
        </x-slot:right>
    </x-content.offset>
</x-app-layout>
