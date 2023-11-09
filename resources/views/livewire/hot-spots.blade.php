<div class="dark:text-white min-h-[500px]" x-data="{popup: ''}">
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
            <div class="w-full relative">
{{--                <img class="w-full" src="{{$activeSpot['image']}}" alt="">--}}

                <div class="w-full h-[900px] bg-gray-100"></div>

                @foreach($activeSpot['spots'] as $key=>$spot)
                   <div wire:key="{{ $spot['id']}}"  class="w-4 h-4 rounded-full bg-red absolute" style="top:{{$spot['x']}}px; left:  {{$spot['y']}}px">
                       <div x-show="popup == {{$key}}" x-transition class="absolute top-12 w-[300px] text-black bg-white">
                           {{ $spot['content']}}
                       </div>
                   </div>
                @endforeach
            </div>
        </x-slot:right>
    </x-content.offset>
</div>
