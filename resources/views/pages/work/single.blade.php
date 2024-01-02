<x-work-layout>
    <div class="sticky z-20 top-0 w-full dark:bg-black h-nav {{$navBg}}">
        <livewire:nav-bar :routes="$navRoutes"/>
    </div>

    <div class="absolute inset-0 h-2/3 w-full {{$navBg}} z-0"></div>

    <div class="border-b border-white mb-8 pb-8 z-10 relative">
        <x-container>
            <x-page-header class="w-2/3 pb-6 pt-32 text-white">
                <h1>Discover Texas’ historic landscape through a digital portal of 40,000 records</h1>
            </x-page-header>
        </x-container>
    </div>

    <div class="mb-8 z-10 relative">
        <x-content.offset class="mb-32">
            <x-slot:left>
                <div class="text-white space-y-4">
                    <h3>Texas General Land Office</h3>

                    <p class="!text-white opacity-75">CMS, Information Architecture, Digital Design, Development, Accessibility 2023 (Texas, USA)</p>

                    <a href="https://historictexasmaps.com" target="_blank" class="underline block">historictexasmaps.com</a>

                </div>
            </x-slot:left>
            <x-slot:right>
                <div class="w-full pt-work-single bg-cover bg-center"
                     style="background-image: url('{{asset('/storage/images/phone-2.png')}}');">
                </div>

            </x-slot:right>
        </x-content.offset>
    </div>

    <div class="border-t border-concrete mb-8 pt-8 z-10 relative">
        <x-content.offset class="mb-12">
            <x-slot:left>
                <div class="space-y-4">
                    <h3>Concept</h3>

                    <p>The Texas General Land Office, established in 1837, holds an archive of over 40,000 historical records consisting of land grant records and maps dating to the 16th century that detail the passage of Texas public lands to private ownership.</p>
                </div>
            </x-slot:left>
            <x-slot:right>
                <div class="w-full pt-work-single bg-cover bg-center"
                     style="background-image: url('{{asset('/storage/images/phone-2.png')}}');">
                </div>

            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset class="mb-12">
        <x-slot:left>

        </x-slot:left>
        <x-slot:right>
            <x-page-header >
                <h1>Offering unique abilities to create, manage and support the needs of any scale</h1>
            </x-page-header>

        </x-slot:right>
    </x-content.offset>

    @foreach($content as $item)
        <div class="border-t border-concrete mb-8 pt-8 z-10 relative">
            <x-content.offset class="mb-20">
                <x-slot:left>
                    <h3>{{$item['header']}}</h3>

                    <p>{{$item['content']}}</p>
                </x-slot:left>

                <x-slot:right>
                    <div class="w-full pt-work-single bg-cover bg-center"
                         style="background-image: url('{{$item['image']}}');">
                    </div>

                </x-slot:right>
            </x-content.offset>
        </div>
    @endforeach

    <div class="border-b border-concrete mb-8 pb-8 z-10 relative">
        <x-content.offset >
            <x-slot:left>

            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h5>Related</h5>
                </x-page-header>

            </x-slot:right>
        </x-content.offset>
    </div>

    <x-work.grid class="mb-32" :work="$work" />

</x-work-layout>
