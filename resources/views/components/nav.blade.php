

<div x-cloak x-data="{ open: false }">
    <div>
        <ul class="flex justify-between">
            <li>One</li>
            <li>Two</li>
            <li>
                <button @click="open = ! open">Open</button>
            </li>
        </ul>
    </div>

    <div class="absolute inset-0 backdrop-blur-sm bg-white/30"
         x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-x-full"
         x-transition:enter-end="opacity-100 "
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 "
         x-transition:leave-end="opacity-0 translate-x-full">
        Content...
        <button @click="open = ! open">Close</button>
    </div>
</div>
