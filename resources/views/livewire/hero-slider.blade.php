<div x-cloak x-data="slider">


    <x-content.offset>
        <x-slot:left>
            <ul class="flex items-end h-full">
                <template x-for="tab in tabs">
                    <li class="relative w-1/3 mr-4 cursor-pointer hover:opacity-80 transition-opacity ease"
                        @click="currentTab = tab.id">
                        <button
                            x-text="tab.label"
                            role="tab"
                            aria-controls="first-tab-panel"
                            :aria-selected="currentTab === tab.id"

                            :class="{'text-grey' : currentTab !== tab.id, 'text-red' : currentTab === tab.id}"
                            :tabindex="currentTab === tab.id ? '0' : '-1'"
                        >
                        </button>

                        <div class="h-1 relative max-w-xl rounded-full overflow-hidden" >
                            <div class="w-full h-full bg-gray-200 absolute top-0"></div>
                            <div :class="{'w-0':currentTab !== tab.id, 'w-full transition-all ease-out duration-1000':currentTab === tab.id}"
                                 class="h-full bg-red absolute top-0"></div>
                        </div>
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
