<x-app-layout>
    <div class="border-b border-concrete mb-6 ">
        <x-container>
            <x-page-header class="w-2/3 pt-32">
                <h1>{{$pageHeader}}</h1>
            </x-page-header>
        </x-container>
    </div>

    <x-container>
        <livewire:grid-filter :items="$work" :$clients/>
    </x-container>

    <div class="mb-6 border-b border-concrete pb-4">
        <x-container>
            <x-page-header class="md:w-9/12 ml-auto">
                <h4 class="pb-4">Meet Qi – the universal software that’s shaping the future of culture</h4>
            </x-page-header>
        </x-container>
    </div>

    <x-content.offset class="mb-28">
        <x-slot:left>
            <div class="space-y-4">
                <h4>Qi Collections Management</h4>
                <p class="text-grey">Our diverse team of managers, engineers and designers work from our headquarters in London.</p>
                <x-link class="block">Learn More</x-link>
            </div>
        </x-slot:left>
        <x-slot:right>
            <x-page-header>
                <img class="w-full" src="{{asset('/storage/images/white-board.png')}}" alt="">
            </x-page-header>
        </x-slot:right>
    </x-content.offset>
</x-app-layout>
