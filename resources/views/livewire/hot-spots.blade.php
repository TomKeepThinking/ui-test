<div class="dark:text-white min-h-[900px]" x-data="dropdown">

    <x-content.offset>
        <x-slot:left>
            <h3>Key Features</h3>
            <p class="text-grey mb-12">Qi is designed for universal flexibility, collaboration, simplicity and speed for any type of information management.</p>

           <ul class="flex flex-col border divide-y ">
               @foreach($hotSpots as $key=>$spot)
                   <li wire:key="{{ $key }}">
                       <span  wire:click="setActiveSpot('{{$key}}')"
                              class="py-2 px-4 block cursor-pointer hover:opacity-70 transition-opacity ease">{{$spot['name']}}</span>

                       @if ($this->openSubMenu($spot['name']))
                          <ul wire:transition.in.opacity.duration.200ms
                              class="border-t text-grey">
                              @foreach($spot['spots'] as $key=>$item)
                                <li wire:key="{{ $key }}"
                                    @mouseover="popup = {{$key}}"
                                    @mouseleave="popup = ''"
                                    class="px-4 py-2 transition-all ease cursor-pointer hover:bg-red hover:text-white">
                                    {{$key+1 . ' ' .  $item['name']}}
                                </li>
                              @endforeach
                          </ul>
                       @endif
                   </li>
               @endforeach
           </ul>
        </x-slot:left>

        <x-slot:right>
            <div class="p-20 bg-sand">
                <div class="w-full relative ">
                    {{--                <img class="w-full" src="{{$activeSpot['image']}}" alt="">--}}

                    <div class="w-full h-[900px] bg-gray-100 shadow-xl rounded-xl overflow-y-hidden"></div>

                    @foreach($activeSpot['spots'] as $key=>$spot)
                        <div wire:key="{{ $spot['id']}}"
                             class="w-6 h-6 rounded-full bg-red absolute cursor-pointer flex items-center justify-center"
                             style="top:{{$spot['x']}}px; left:  {{$spot['y']}}px"
                             @mouseover="popup = {{$key}}"
                             @mouseleave="popup = ''">

                            <span class=" text-xxs">{{$key+1}}</span>

                            <div x-show="popup === {{$key}}"
                                 id="popup-{{$spot['id']}}"
                                 x-transition
                                 :class="calcPopupLocation(@js($spot['id']))"
                                 class="z-10 absolute p-4 rounded-sm top-8 w-[300px] text-white bg-black shadow">
                                <p> {{ $spot['content']}}</p>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </x-slot:right>
    </x-content.offset>
</div>
