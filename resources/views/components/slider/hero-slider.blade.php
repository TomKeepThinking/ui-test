<div x-cloak x-data="slider" {{$attributes}}>
    <x-content.offset reverseSm>
        <x-slot:left>
            {{$slot}}

            <ul class="flex items-end h-full">
                <template x-for="tab in tabs">
                    <li class="relative w-1/3 mr-2 cursor-pointer hover:opacity-80 transition-opacity ease"
                        @click="currentTab = tab.id">
                        <button
                            x-ref="tab.id"
                            x-text="tab.label"
                            role="tab"
                            :aria-selected="currentTab === tab.id"
                            class="lg:mb-2 text-xxs lg:text-sm transition-all ease"
                            :class="{'text-charcoal' : currentTab !== tab.id, 'text-red' : currentTab === tab.id}"
                            :tabindex="currentTab === tab.id ? '0' : '-1'"
                        >
                        </button>

                        <x-slider.progress/>
                    </li>
                </template>
            </ul>
        </x-slot:left>

        <x-slot:right>
            <div class="h-[360px] lg:h-[620px] relative w-full">
                <x-slider.tab :tab="1" image="/images/laptop-1.png"/>

                <x-slider.tab :tab="2" image="/images/phones-1.png"/>

                <x-slider.tab :tab="3" image="/images/phones-1.png"/>
            </div>
        </x-slot:right>

    </x-content.offset>
</div>
