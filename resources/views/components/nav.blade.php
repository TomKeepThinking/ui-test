<div class="flex justify-between py-4"  x-cloak x-data="{ open: false }">
    <div class="w-48 text-red">
        <x-icons.kt-logo/>
    </div>
    <div>
        <ul class="flex justify-between items-center space-x-4">
            <li>Qi</li>
            <li>Work</li>
            <li>Ideas</li>
            <li>About</li>
            <li>Contact</li>
            <li>
                <x-button @click="open = ! open">
                    Button
                </x-button>
            </li>
        </ul>
    </div>


    <div class="absolute inset-0 backdrop-blur-sm bg-white/30"
         x-show="open"
         x-transition
         >
        Content...
        <button @click="open = ! open">Close</button>
    </div>
</div>
