<div class="dark:text-white min-h-[500px]" >
    <x-content.offset>
        <x-slot:left>
            <h3>Key Features</h3>
            <p class="text-grey mb-12">Qi is designed for universal flexibility, collaboration, simplicity and speed for any type of information management.</p>

           <ul class="flex flex-col border divide-y ">
               @foreach($hotSpots as $key=>$spot)
                   <li>
                       <span  wire:click="setActiveSpot('{{$key}}')"
                              class="py-2 px-4 block cursor-pointer hover:opacity-70 transition-opacity ease">{{$spot['name']}}</span>

                       @if ($this->openSubMenu($spot['name']))
                          <ul wire:transition.in.opacity.duration.200ms
                              class="border-t px-4 py-2 space-y-2 text-grey">
                              @foreach($spot['hostSpot'] as $key=>$item)
                                <li class="cursor-pointer hover:opacity-70 transition-opacity ease">{{$key+1 . ' ' .  $item['name']}}</li>
                              @endforeach
                          </ul>
                       @endif
                   </li>
               @endforeach
           </ul>
        </x-slot:left>
        <x-slot:right></x-slot:right>
    </x-content.offset>
</div>
