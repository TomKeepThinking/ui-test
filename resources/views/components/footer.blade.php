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

<div class="bg-black text-white tracking-body-d" x-cloak x-data="{ open: false }">
    <div class="pt-10 mx-auto">
       <x-container>
           <x-page-header class="md:w-9/12 pb-8 ml-auto">
               <h5 class="!text-white ">Want to learn more about our approach, software and projects? <span class="!text-concrete">Get in touch</span></h5>
           </x-page-header>
       </x-container>
    </div>

    <div class="border-t border-concrete">
        <div class="container mx-auto md:px-8 md:py-4">
            <div class="flex flex-col-reverse space-y-12 space-y-reverse md:flex-row md:mb-12">
                <div class="w-full md:w-1/2 xl:w-1/3 px-8 md:px-0 pb-4 md:pb-0">
                        <div class="flex flex-wrap mb-4">
                            <span class="mr-2 text-sm md:text-lg">Get in touch</span>
                            <x-link class="!text-concrete">Contact Us </x-link>
                        </div>

                    <x-button-secondary @click="open = true" class="!text-black hover:!bg-red hover:!text-white">
                        Subscribe to Newsletter
                    </x-button-secondary>
                </div>

                <div class="w-full grid gap-5 grid-cols-4 md:grid-cols-3">
                    <div class="col-span-4 md:col-span-1 grid gap-5 grid-cols-2 md:grid-cols-1 px-8 pt-4 md:px-0 md:py-0">
                        <div class="col-span-1">
                            <address class="not-italic mb-4">
                                38-40 Southwark Street<br>
                                London SE1 1UN<br>
                                UK
                            </address>

                            <p class="text-white">Monday to Friday </p>
                            <p class="text-white">9:30am to 6:00pm</p>
                        </div>


                        <div class="flex flex-col col-span-1">
                            <x-link class="!text-concrete">
                                +44 20 7490 5337
                            </x-link>

                            <x-link class="!text-concrete">
                                info@keepthinking.it
                            </x-link>
                        </div>
                    </div>
                    <div class="col-span-4 relative md:hidden">
                        <div class=" bg-concrete h-px w-[1500px] absolute -ml-[500px]"></div>
                    </div>

                    <div class="col-span-2 md:col-span-1 px-8 md:px-0">
                        <ul>
                            @foreach ($navItems as $item)
                                <li><x-link class="!text-concrete">{{ $item['name']}}</x-link></li>
                            @endforeach
                            <li><x-link class="!text-concrete">Get A Demo</x-link></li>
                        </ul>
                    </div>
                    <div class="col-span-2 md:col-span-1 ">
                        <ul>
                            @foreach ($socialNavItems as $item)
                                <li><x-link class="!text-concrete">{{ $item['name']}}</x-link></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-concrete text-concrete">
        <div class="container px-8 py-4 mx-auto">
            <div class="grid grid-cols-12 text-xs md:text-sm">
                <div class="col-span-3 md:col-span-3 text-concrete">&copy; 2022-2023</div>
                <div class="col-span-9 md:col-span-6 text-concrete">Registered in England and Wales 04905582</div>
            </div>
        </div>
    </div>

    <div  x-show="open"
          x-transition.opacity>

        <x-modal.newsletter/>
    </div>
</div>
