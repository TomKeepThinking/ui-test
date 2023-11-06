<div class="text-lg font-normal flex justify-between py-4">
    <div class="w-36 text-red">
        <x-icons.kt-logo />
    </div>

    <ul class="hidden md:flex space-x-2">
        <li>Qi</li>
        <li>Work</li>
        <li>Ideas</li>
        <li>About</li>
        <li>Contact</li>
        <li>
            <a href="#" class="bg-red rounded-3xl py-2.5 px-5 text-white hover:bg-charcoal transition-all ease">
                Get a demo
            </a>
        </li>
    </ul>

    <div class="md:hidden" x-cloak x-data="{ open: false }">
        <button class="w-7 text-red" @click="open = ! open">
            <x-icons.menu-icon />
        </button>

        <div x-show="open" x-transition class="absolute inset-0 bg-red px-8 py-4 flex justify-between">
            <div class="w-36 text-white">
                <x-icons.kt-logo />
            </div>

            <button type="button" class="block w-7 h-7 text-white"  @click="open = false">
                <x-icons.close-icon />
            </button>
        </div>
    </div>
</div>
