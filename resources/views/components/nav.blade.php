<?php

$navItems = [
    [
      'name' => 'Qi',
      'route' => 'pages.qi'
    ],
    [
        'name' => 'Work',
        'route' => 'pages.work'
    ],
    [
        'name' => 'Ideas',
        'route' => 'pages.ideas'
    ],
    [
        'name' => 'About',
        'route' => 'pages.about'
    ],
    [
        'name' => 'Contact',
        'route' => 'pages.contact'
    ],
];

?>

<div class="flex justify-between items-center container mx-auto  px-8 py-4" x-cloak x-data="{ open: false }">
    <x-icons.kt-logo class="w-48 text-red"/>

    <div class="hidden md:block">
        <ul class="flex justify-between items-center space-x-4">
            @foreach ($navItems as $item)
                <li>
                    <a href="{{route($item['route'])}}">{{ $item['name'] }}</a>
                </li>
            @endforeach
            <li>
                <x-button>
                    Get a Demo
                </x-button>
            </li>
        </ul>
    </div>

    <x-icon-button class="w-7 text-red md:hidden" @click="open = ! open">
        <x-icons.menu-icon/>
    </x-icon-button>


    <div class="absolute inset-0  bg-red text-white flex flex-col "
         x-show="open"
         x-transition:enter.opacity.0
         x-transition:leave.opacity.0
    >
        <div class="flex justify-between items-center px-8 py-4 absolute top-0 w-full">
            <x-icons.kt-logo  class="w-48 text-white"/>

            <x-icon-button class="w-7 text-white md:hidden" @click="open = false">
                <x-icons.close-icon />
            </x-icon-button>
        </div>

        <div class="text-2.5xl flex flex-col h-full justify-center">
            <ul class="">
                @foreach ($navItems as $item)
                    <li class="border-b border-white py-4 px-8">{{ $item['name'] }}</li>
                @endforeach
            </ul>
        </div>

        <div class="px-8 py-4">
            <x-button-secondary>
                Get a demo
            </x-button-secondary>
        </div>
    </div>
</div>