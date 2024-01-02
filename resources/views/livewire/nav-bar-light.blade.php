<div class="flex justify-between items-center container mx-auto px-8 py-4 h-nav"
     x-cloak x-data="{open: false}">

    <x-link route="{{route('pages.home')}}"
            wire:click="clearActiveNavItem()">

            <x-icons.kt-logo class="w-48 text-white" />

        <span class="sr-only">KT Logo</span>
    </x-link>

    <div class="hidden md:block over">
        <ul class="flex justify-between items-center space-x-4">
            @foreach ($navItems as $item)
                    <li class="dark:text-white ">
                        <a href="{{route($item['route'])}}"
                           wire:navigate.hover
                            @class([
                            'tracking-body-d text-white',
                            'underline underline-offset-4' => str_contains($item['route'], 'work'),
                         ])
                        >
                            {{ $item['name'] }}
                        </a>
                    </li>

            @endforeach

            <li>
                <x-link :opacity="false" route="{{route('pages.demo')}}">
                    <x-button class="hover:bg-black hover:!text-white bg-white !text-black">
                        Get a Demo
                    </x-button>
                </x-link>
            </li>
        </ul>
    </div>

    <x-icon-button class="w-7 text-black dark:text-white md:hidden z-200" wire:click="toggleMobile">
        <x-icons.menu-icon color="bg-white" :open="$open"/>
        <div class="sr-only">Menu Button</div>
    </x-icon-button>

    <div class="fixed inset-0 h-full z-100 bg-red text-white flex flex-col "
         x-show="$wire.open"
         x-transition.opacity
    >
        <div class="flex justify-between items-center px-8 py-4 absolute top-0 w-full">
            <x-link route="{{route('pages.home')}}">
                <x-icons.kt-logo  class="w-48 text-white"/>
            </x-link>
        </div>

        <div class="text-2.5xl flex flex-col h-full justify-center">
            <ul>
                @foreach ($navItems as $item)
                    <li class="border-b border-white py-4 px-8">
                        <a href="{{route($item['route'])}}">
                            {{ $item['name'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="px-8 py-4">
            <x-link href="{{route('pages.demo')}}">
                <x-button-secondary>
                    Get a demo
                </x-button-secondary>
            </x-link>
        </div>
    </div>
</div>

