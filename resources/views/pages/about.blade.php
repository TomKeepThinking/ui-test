<x-app-layout>
    <div class="border-b border-concrete mb-8 pb-8">
        <x-container>
            <x-page-header class="w-2/3 pb-6 pt-32">
                <h1>We’re a software & design agency providing technology for over twenty years</h1>
            </x-page-header>
        </x-container>
    </div>

    <x-content.offset class="mb-28" reverse="true">
        <x-slot:left>
            <div class="text-grey">
                <p>Our diverse team of managers, engineers and designers work from our headquarters in London.</p>
            </div>
        </x-slot:left>
        <x-slot:right>
            <x-page-header>
                <img class="w-full" src="{{asset('/storage/images/white-board.png')}}" alt="">
            </x-page-header>
        </x-slot:right>
    </x-content.offset>

    <x-content.offset class="mb-28">
        <x-slot:left>

        </x-slot:left>
        <x-slot:right>
            <x-page-header>
                We’re passionate about culture, always striving to make heritage accessible
            </x-page-header>
        </x-slot:right>
    </x-content.offset>


    <x-container>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mb-5">
            <div class="col-span-1 lg:col-span-9 grid grid-cols-6 gap-4 ">
                <div class="col-span-6 lg:col-span-2 order-last lg:order-none">
                    <h4>Our past</h4>
                    <p class="text-grey">Since 2002, our award winning work has helped a breadth of international clients in cultural sectors such as museums, galleries, archives, libraries, artists, magazines, and collectors.</p>
                </div>
                <div class="h-80 col-span-6 lg:col-span-4 bg-cover bg-center bg-no-repeat"
                     style="background-image: url('{{ asset('storage/images/about-plants.png')}}');"></div>
            </div>

            <div class="col-span-1 lg:col-span-3">
                <div class="h-80 w-full bg-cover bg-center bg-no-repeat"
                     style="background-image: url('{{ asset('storage/images/about-table.png')}}');"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mb-5">
            <div class="col-span-1 lg:col-span-6">
                <div class="h-80 w-full bg-center bg-cover bg-no-repeat"
                     style="background-image: url('{{ asset('storage/images/about-beard.png')}}');"></div>
            </div>

            <div class="col-span-1 lg:col-span-6  grid grid-cols-6 gap-4">
                <div class="h-80 col-span-6 lg:col-span-3 bg-no-repeat bg-cover bg-center"
                     style="background-image: url('{{ asset('storage/images/about-computer.png')}}');"></div>
                <div class="col-span-6 lg:col-span-3">
                    <h4>Our present</h4>
                    <p class="text-grey">With growing global recognition, we understand the importance of keeping a highly skilled team, where every member is pivotal to our success. Our diverse team of managers, engineers and designers work from our headquarters in London.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 mb-5">
            <div class="col-span-1 lg:col-span-9 grid grid-cols-6 gap-4">
                <div class=" col-span-6 lg:col-span-2 order-last lg:order-none">
                    <h4>Our future</h4>
                    <p class="text-grey">Our ambitions are directed towards an accessible, inclusive future. Where our collective histories and culture are preserved and discoverable for all. We aim to break barriers and build culture.</p>
                </div>
                <div class="h-80 col-span-6 lg:col-span-4 bg-no-repeat bg-cover bg-center"
                     style="background-image: url('{{ asset('storage/images/about-tables.png')}}');"></div>
            </div>

            <div class="col-span-1 lg:col-span-3">
                <div class="h-80 w-full bg-no-repeat bg-cover bg-center"
                     style="background-image: url('{{ asset('storage/images/phone-2.png')}}');"></div>
            </div>
        </div>
    </x-container>

    <div class="border-b border-concrete mb-5">
        <x-content.offset >
            <x-slot:left></x-slot:left>
            <x-slot:right>
                <x-page-header class="w-2/3 pb-6 pt-32">
                    <h2>Meet the team</h2>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset class="mb-28">
        <x-slot:left>
            <p class="text-grey">We create beautiful interfaces combined with solid technology and strong usability and accessibility principles, helping our customers present their information and engage with their audiences.</p>
        </x-slot:left>
        <x-slot:right>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($team as $member)
                   <div class="col-span-1 ">
                       <div class="h-80 w-full bg-no-repeat bg-cover bg-center"
                            style="background-image: url('{{$member['image']}}')">
                       </div>

                       <div>
                           <h5>{{$member['name']}}</h5>
                           <h6 class="text-grey">{{$member['role']}}</h6>
                       </div>
                   </div>
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
                    <h3>Selected Clients</h3>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-logo-grid />

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

    <x-work.grid class="mb-32" :work="$work" />

</x-app-layout>
