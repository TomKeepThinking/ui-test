<x-app-layout>
    <x-container>
        <x-page-header class="w-2/3 pb-6 pt-32">
            <h1>Meet Qi – the universal software that’s shaping the future of arts & culture</h1>
        </x-page-header>
    </x-container>


    <div class="border-t border-concrete pt-6 mb-12">
        <x-content.offset>
            <x-slot:left>
                <h2 class="mb-2">Versatile, customisable, modern</h2>
                <p class="mb-6 font-medium text-grey">Providing technology for over 20 years to organisations in the arts, culture and heritage sectors, Qi is an innovative content and collection management system for museums and archives.</p>
                <div class="w-40">
                    <x-icons.spectrum/>
                </div>
            </x-slot:left>

            <x-slot:right>
                <img class="w-full" src="{{asset('/storage/images/qi-screen.png')}}" alt="">
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset>
        <x-slot:left></x-slot:left>
        <x-slot:right>
            <x-page-header>
                <h2>Offering unique abilities to create, manage and support the needs of any scale</h2>
            </x-page-header>
        </x-slot:right>
    </x-content.offset>


    <livewire:hot-spots :$hotSpots></livewire:hot-spots>

</x-app-layout>
