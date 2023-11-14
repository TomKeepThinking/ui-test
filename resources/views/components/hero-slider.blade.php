<div x-cloak x-data="slider" {{$attributes}}>
    <x-content.offset reverse>
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
                            class="lg:mb-2 text-xxs lg:text-sm"
                            :class="{'text-grey' : currentTab !== tab.id, 'text-red' : currentTab === tab.id}"
                            :tabindex="currentTab === tab.id ? '0' : '-1'"
                        >
                        </button>

                        <x-slider.progress/>
                    </li>
                </template>
            </ul>
        </x-slot:left>

        <x-slot:right>
            <div class="h-[620px] relative">
                <x-slider.tab :tab="1" image="/storage/images/laptop-falling.png"/>

                <x-slider.tab :tab="2" image="/storage/images/phone-2.png"/>

                <x-slider.tab :tab="3" image="/storage/images/phone-3.png"/>
            </div>
        </x-slot:right>

    </x-content.offset>
</div>
