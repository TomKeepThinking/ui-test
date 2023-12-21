<div class="mb-48" x-data="{'activeImage': ''}">
    <div class="flex flex-wrap justify-between items-center mb-6 text-grey">
        <div class="flex flex-wrap capitalize">
            @foreach($filters as $filter)
                <div wire:click="setActiveItem(@js($filter))"
                    @class([
                    'cursor-pointer hover:opacity-60 transition-opacity ease mr-4',
                    'underline text-black' => $filter === $activeFilter && !$showClients,
                    'text-grey' => $filter !== $activeFilter
                    ])>
                    {{$filter}}
                </div>
            @endforeach
        </div>

        <div wire:click="toggleClients"
             @class(['cursor-pointer hover:opacity-60 transition-opacity ease', 'underline' => $showClients])>Client</div>
    </div>


    <div class="relative">
            <div
                x-show="$wire.showClients"
                x-transition:enter.opacity.duration.500ms
                class="bg-white w-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 items-start">
                    <div class="col-span-1">
                        <div  x-show="activeImage"
                              x-cloak
                              x-transition:enter.duration.500ms
                              x-transition:leave.duration.400ms
                              class="h-72 w-full bg-cover bg-center bg-gray-2000 transition-all delay-75 ease"
                             :style="`background-image: url(${activeImage})`">
                        </div>
                    </div>

                    @foreach($clients as $clientChunk)
                        <ul class="col-span-1 grid grid-cols-1">
                            @foreach($clientChunk as $client)
                                <li @mouseover="activeImage = @js($client['image'])"
                                    @mouseout="activeImage = ''"
                                    class="cursor-pointer text-grey">
                                   <span
                                       class="
                                             pb-0 mb-0
                                            leading-6
                                            hover:underline inline-block
                                            underline-offset-4
                                            hover:text-black transition-all ease">
                                        {{$client['name']}}
                                   </span>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        @foreach($filters as $filter)
            <div x-cloak
                 x-show="$wire.activeFilter === @js($filter) && !$wire.showClients"
                 class="grid grid-cols-12 gap-5 gap-y-24"
                 x-transition:enter.opacity.duration.500ms>

                @if($filter === 'featured')
                    @foreach($filteredItems as $key=>$item)
                        @if($key === 0 || $key === 6 || $key === 7)
                            <x-work.grid-item title="{{ $item['title'] }}" content="{{ $item['excerpt'] }}" image="{{ $item['image'] }}" :large="true"/>
                        @else
                            <x-work.grid-item title="{{ $item['title'] }}" content="{{ $item['excerpt'] }}" image="{{ $item['image'] }}"/>
                        @endif
                    @endforeach

                @else
                    @foreach($filteredItems as $key=>$item)
                        <x-filter.grid-item :$key title="{{ $item['title'] }}" content="{{ $item['excerpt'] }}" image="{{ $item['image'] }}"></x-filter.grid-item>
                    @endforeach
                @endif
            </div>
        @endforeach
    </div>

</div>
