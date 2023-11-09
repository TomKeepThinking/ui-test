<x-app-layout>
    <x-page-header class="w-2/3 pb-6">
        <h1>Innovative digital solutions to help preserve and shape  culture and heritage</h1>
    </x-page-header>

    <div class="border-t border-concrete pt-6 mb-12">
        <x-content.offset>
            <x-slot:left>
                <h2>Qi Collections Management</h2>
                <p class="font-normal">Take control of your entire operations with customisable, integrable content & collections management system.</p>
                <x-link route="{{route('pages.about')}}">Learn More</x-link>
            </x-slot:left>

            <x-slot:right>
                <img class="w-full" src="{{asset('/storage/images/laptop-falling.png')}}" alt="">
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-work-row class="mb-12"/>
</x-app-layout>
