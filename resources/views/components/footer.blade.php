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

<div class="bg-black text-white">
    <div class="container px-8 py-4 mx-auto">
        <x-content.offset>
            <x-slot:left>
                <span class="mr-2">Get in touch</span> <x-link>Contact Us </x-link>
            </x-slot:left>

            <x-slot:right>
                <x-page-header>
                    Want to learn more about our approach, software and projects? <span class="text-grey">Get in touch</span>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <div class="border-t border-white pb-36">
        <div class="container px-8 py-4 mx-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-3">
                    <x-button-secondary class="text-black hover:text-white">
                        Subscribe to Newsletter
                    </x-button-secondary>
                </div>
                <div class="col-span-3">
                    <address class="not-italic mb-4">
                        38-40 <br>
                        Southwark Street<br>
                        London SE1 1UN<br>
                        UK
                    </address>

                    <x-link>
                        +44 20 7490 5337
                    </x-link>

                    <x-link>
                        info@keepthinking.it
                    </x-link>
                </div>
                <div class="col-span-3">
                    <ul>
                        @foreach ($navItems as $item)
                        <li><x-link>{{ $item['name']}}</x-link></li>
                        @endforeach
                            <li><x-link>Get A Demo</x-link></li>
                    </ul>
                </div>
                <div class="col-span-3">
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

    <div class="border-t border-white text-grey">
        <div class="container px-8 py-4 mx-auto">
            <div class="grid grid-cols-12">
                <div class="col-span-3">&copy; 2022-2023</div>
                <div class="col-span-6">Registered in England and Wales 04905582</div>
                <div class="col-span-3">VAT Registration 831132962</div>
            </div>
        </div>
    </div>
</div>
