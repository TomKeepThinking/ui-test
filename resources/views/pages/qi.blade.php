<div class="dark page-container">
<x-app-layout>
    <x-top-header>
        <h1 class="split-words">Meet Qi – the universal software that’s shaping the future of arts & culture</h1>
    </x-top-header>

    <div class="mb-40">
        <x-content.offset>
            <x-slot:left>
               <div class="mb-2">
                   <h2 class="tracking-body-d">Versatile, customisable, modern</h2>
                   <p>Providing technology for over 20 years to organisations in the arts, culture and heritage sectors, Qi is an innovative content and collection management system for museums and archives.</p>
               </div>
                <div class="w-40">
                    <x-icons.spectrum/>
                </div>
            </x-slot:left>

            <x-slot:right>
                <img class="w-full" src="{{asset('/images/qi-screen.png')}}" alt="">
            </x-slot:right>
        </x-content.offset>
    </div>

    <div class="border-b border-concrete mb-12">
        <x-content.offset>
            <x-slot:left></x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h2>Offering unique abilities to create, manage and support the needs of any scale</h2>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>


    <div class="mb-26 md:mb-36">
        <livewire:hot-spots :$hotSpots></livewire:hot-spots>
    </div>

    <div class="mb-8 border-b border-concrete">
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

    <div class="mb-8 border-b border-concrete">
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

    <x-content.offset class="mb-26 md:mb-36">
        <x-slot:left>
            <div>
                <h4 class="tracking-body-d">Detailed specifications</h4>

                <p>Read a detailed description of Qi and download the specifications for later.</p>
            </div>

            <x-download-btn >
                <span class="mb-2">Qi Detailed Specifications</span>
                (1.7 MB)
            </x-download-btn>
        </x-slot:left>

        <x-slot:right>
            <div class="grid grid-cols-1 lg:grid-cols-3 border-t border-l border-concrete">
                @foreach($features as $feature)
                    <x-content.text-grid-item>
                        <h4 class="mb-2 tracking-body-d">{{$feature['title']}}</h4>

                        <ul class="dark:text-concrete list-disc pl-4 space-y-2 ">
                            @foreach($feature['features'] as $item)
                                <li class="leading-6 tracking-body-d ">{{$item}}</li>
                            @endforeach
                        </ul>
                    </x-content.text-grid-item>
                @endforeach
            </div>
        </x-slot:right>
    </x-content.offset>

    <div class="mb-8 border-b border-concrete">
        <x-container>
            <x-page-header class="md:w-9/12 ml-auto">
                <h3>Technology</h3>
            </x-page-header>
        </x-container>
    </div>

    <x-content.offset class="mb-26 md:mb-36">
        <x-slot:left>
            <p>We offer: training programmes, comprehensive documentation, in-application help, modular front-end framework and pluggable, RESTful API among other things.</p>
        </x-slot:left>

        <x-slot:right>
            <div class="grid grid-cols-1 lg:grid-cols-3 border-t border-l">
                @foreach($technology as $tech)
                    <x-content.text-grid-item>
                        <h4 class="mb-2 tracking-body-d">{{$tech['title']}}</h4>

                        <ul class="text-concrete list-disc pl-4 space-y-2 ">
                            @foreach($tech['features'] as $item)
                                <li class="leading-6 tracking-body-d">{{$item}}</li>
                            @endforeach
                        </ul>
                    </x-content.text-grid-item>
                @endforeach
            </div>
        </x-slot:right>
    </x-content.offset>

    <div class="mb-6 border-b border-concrete">
        <x-container>
            <x-page-header class="md:w-9/12 ml-auto">
                <h3>Leveraging digital design that
                    helps to shape the way we experience culture & history</h3>
            </x-page-header>
        </x-container>
    </div>

    <x-content.offset>
        <x-slot:left>
            <div class="flex h-full pb-8">
                <x-link-dark class="mt-auto">
                    View our work
                </x-link-dark>
            </div>
        </x-slot:left>

    </x-content.offset>
    <div class="border-b border-concrete pb-8">
        <x-work.grid class="mb-12" :work="$work" />
    </div>
</x-app-layout>
</div>

