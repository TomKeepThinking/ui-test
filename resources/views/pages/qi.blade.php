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

    <x-content.offset class="mb-12">
        <x-slot:left></x-slot:left>
        <x-slot:right>
            <x-page-header>
                <h2>Offering unique abilities to create, manage and support the needs of any scale</h2>
            </x-page-header>
        </x-slot:right>
    </x-content.offset>


    <div class="mb-12">
        <livewire:hot-spots :$hotSpots></livewire:hot-spots>
    </div>

    <div class="mb-8 border-b border-concrete pb-8">
        <x-content.offset>
            <x-slot:left>

            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h3>Selected Clients</h3>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

   <x-logo-grid/>

    <div class="mb-8 border-b border-concrete pb-8">
        <x-content.offset>
            <x-slot:left>

            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h3>Built with harmony in mind, configurable and integrable with any database</h3>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset class="mb-8">
        <x-slot:left>
            <h4>Detailed specifications</h4>

            <p class="text-grey mb-8">Read a detailed description of Qi and download the specifications for later.</p>

            <x-download-btn>
                <span class="mb-2">Qi Detailed Specifications</span>
                (1.7 MB)
            </x-download-btn>
        </x-slot:left>

        <x-slot:right>
            <div class="grid grid-cols-1 lg:grid-cols-3 border-t border-l">
                @foreach($features as $feature)
                    <x-content.text-grid-item>
                        <h4 class="mb-2">{{$feature['title']}}</h4>

                        <ul class="text-grey list-disc pl-4 space-y-2 ">
                            @foreach($feature['features'] as $item)
                                <li class="leading-6 tracking-body-d">{{$item}}</li>
                            @endforeach
                        </ul>
                    </x-content.text-grid-item>
                @endforeach
            </div>
        </x-slot:right>
    </x-content.offset>


    <div class="mb-8 border-b border-concrete pb-8">
        <x-content.offset>
            <x-slot:left>

            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h3>Technology</h3>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset class="mb-12">
        <x-slot:left>
            <h4>Detailed specifications</h4>

            <p class="text-grey">Read a detailed description of Qi and download the specifications for later.</p>
        </x-slot:left>

        <x-slot:right>
            <div class="grid grid-cols-3 border-t border-l">
                @foreach($technology as $tech)
                    <x-content.text-grid-item>
                        <h4 class="mb-2">{{$tech['title']}}</h4>

                        <ul class="text-grey list-disc pl-4 space-y-2 ">
                            @foreach($tech['features'] as $item)
                                <li class="leading-6 tracking-body-d">{{$item}}</li>
                            @endforeach
                        </ul>
                    </x-content.text-grid-item>
                @endforeach
            </div>
        </x-slot:right>
    </x-content.offset>

    <div class="mb-8 border-b border-concrete pb-8">
        <x-content.offset>
            <x-slot:left>
                <div class="flex h-full">
                    <x-link class="mt-auto">
                        View our work
                    </x-link>
                </div>
            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h3>Leveraging digital design that
                        helps to shape the way we experience culture & history</h3>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <div class="mb-8 border-b border-concrete pb-8">
        <x-work.grid class="mb-12" :work="$work" />
    </div>

</x-app-layout>
