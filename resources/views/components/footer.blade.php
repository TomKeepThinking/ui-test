<?php
$navItems = [
    [
        'name' => 'Qi',
        'route' => 'qi'
    ],
    [
        'name' => 'Work',
        'route' => 'work'
    ],
    [
        'name' => 'Ideas',
        'route' => 'ideas'
    ],
    [
        'name' => 'About',
        'route' => 'about'
    ],
    [
        'name' => 'Contact',
        'route' => 'contact'
    ],

];

$socialNavItems = [
    [
        'name' => 'Facebook',
        'route' => 'qi'
    ],
    [
        'name' => 'Instagram',
        'route' => 'work'
    ],
    [
        'name' => 'Twitter',
        'route' => 'ideas'
    ],
    [
        'name' => 'LinkedIn',
        'route' => 'about'
    ],
    [
        'name' => 'The Dots',
        'route' => 'contact'
    ],

];
?>

<div class="bg-black text-white" x-cloak x-data="{ open: false }">
    <div class="py-4 mx-auto">
        <x-content.offset reverseSm class="space-y-12 lg:space-y-0 space-y-reverse ">
            <x-slot:left>
               <div class="flex h-full">
                   <div class="mt-auto flex">
                       <span class="mr-2">Get in touch</span>
                       <x-link>Contact Us </x-link>
                   </div>
               </div>
            </x-slot:left>

            <x-slot:right>
                <x-page-header class="text-white pb-4">
                    <h5>Want to learn more about our approach, software and projects? <span class="text-grey">Get in touch</span></h5>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <div class="border-t border-white md:pb-18">
        <div class="container px-8 py-4 mx-auto">
            <div class="flex flex-col-reverse space-y-12 space-y-reverse md:flex-row">
                <div class="w-full md:w-1/2 xl:w-3/12">
                    <x-button-secondary @click="open = true" class="!text-black hover:!text-white">
                        Subscribe to Newsletter
                    </x-button-secondary>
                </div>

                <div class="w-full md:w-1/2 xl:w-9/12 grid grid-rows-2 grid-cols-12 gap-4">
                    <div class="col-span-6 lg:col-span-4">
                        <address class="not-italic mb-4">
                            38-40 <br>
                            Southwark Street<br>
                            London SE1 1UN<br>
                            UK
                        </address>

                        <p>Monday to Friday </p>
                        <p>9:30am to 6:00pm</p>
                    </div>
                    <div class="flex flex-col lg:row-start-2 lg:row-end-2 col-span-6 lg:col-span-4">
                        <x-link>
                            +44 20 7490 5337
                        </x-link>

                        <x-link>
                            info@keepthinking.it
                        </x-link>
                    </div>

                    <div class="lg:row-start-1 lg:row-end-3 col-span-6 lg:col-span-4">
                        <ul>
                            @foreach ($navItems as $item)
                                <li><x-link>{{ $item['name']}}</x-link></li>
                            @endforeach
                            <li><x-link>Get A Demo</x-link></li>
                        </ul>
                    </div>
                    <div class="lg:row-start-1 lg:row-end-3 col-span-6 lg:col-span-4">
                        <ul>
                            @foreach ($socialNavItems as $item)
                                <li><x-link>{{ $item['name']}}</x-link></li>
                            @endforeach
                            <li><x-link>Get A Demo</x-link></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-white text-grey">
        <div class="container px-8 py-4 mx-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-3 md:col-span-3">&copy; 2022-2023</div>
                <div class="col-span-9 md:col-span-6">Registered in England and Wales 04905582</div>
                <div class="col-span-3 hidden md:block">VAT Registration 831132962</div>
            </div>
        </div>
    </div>

    <div  x-show="open"
          x-transition:enter.opacity.0
          x-transition:leave.opacity.0>

        <x-modal.newsletter/>
    </div>
</div>
