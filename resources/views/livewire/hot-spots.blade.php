<div class="dark:text-white min-h-[900px]" x-data="hotspots">
    <x-content.offset :animate="false">
        <x-slot:left>
            <div class="mb-8">
                <h3>Key Features</h3>
                <p>Qi is designed for universal flexibility, collaboration, simplicity and speed for any type of information management.</p>
            </div>

           <ul class="flex flex-col border divide-y ">

               @foreach($hotSpots as $key=>$spot)
                   <li wire:key="{{ $key }}"
                        class="overflow-hidden"
                        x-cloak>
                       <span  wire:click="setActiveSpot('{{$key}}')"
                              class="py-2 px-4 block cursor-pointer hover:opacity-70 transition-opacity ease text-sm tracking-body-d"
                              :class="{ 'underline underline-offset-4': {{$spot['name'] == $activeSpot['name']}}}">{{$spot['name']}}</span>

                          <ul x-show="$wire.activeSpot.name === @js($spot['name'])"
                              x-collapse
                              class="border-t text-grey ">
                              @foreach($spot['spots'] as $key=>$item)

                                <li wire:key="{{ $key }}"
                                    @mouseover="popup = {{$key}}"
                                    @mouseleave="popup = ''"
                                    class="px-4 py-2 transition-all text-concrete ease cursor-pointer hover:bg-red hover:text-white text-sm tracking-body-d">
                                    {{$key+1 . ' ' .  $item['name']}}
                                </li>
                              @endforeach
                          </ul>
                   </li>
               @endforeach
           </ul>
        </x-slot:left>

        <x-slot:right>
            <div class="p-20 bg-sand">
                <div class="w-full relative ">
                    <div class="w-full h-[900px] bg-gray-100 overflow-y-hidden"></div>
                    @foreach($activeSpot['spots'] as $key=>$spot)

                        <x-pop-up wire:key="{{ $spot['id']}}"
                                  :x="$spot['x']"
                                  :y="$spot['y']"
                                  :key="$key"
                                  :id="$spot['id']"
                                  :name="$spot['name']"
                                  :content="$spot['content']" />
                    @endforeach
                </div>
            </div>
        </x-slot:right>
    </x-content.offset>
</div>
