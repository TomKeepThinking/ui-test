<div class="mb-48">
    <div class="flex justify-between items-center mb-8 text-grey">
        <div class="flex space-x-4  capitalize">
            @foreach($filters as $filter)
                <div wire:click="setActiveItem(@js($filter))" @class(['cursor-pointer', 'underline' => $filter === $activeFilter])>
                    {{$filter}}
                </div>
            @endforeach
        </div>

        <div wire:click="setActiveItem('clients')"
             @class(['cursor-pointer hover:underline', 'underline' => $activeFilter === 'clients'])>Client</div>
    </div>


    <div class="relative">
            <div
                x-show="$wire.activeFilter === 'clients'"
                x-transition:enter.opacity.duration.500ms
                class="bg-white w-full">
                <div class="grid grid-cols-4">
                    <div class="col-span-1">

                    </div>
                    @foreach($clients as $clientChunk)
                        <ul class="col-span-1 grid grid-cols-1">
                            @foreach($clientChunk as $client)
                                <li class="cursor-pointer text-grey">
                                   <span class="hover:border-b-black border-b pb-0 mb-0 leading-6 border-white inline-block
                                            hover:text-black transition-all ease">
                                        {{$client}}
                                   </span>
                                </li>
                            @endforeach
                        </ul>
                    @endforeach
                </div>
            </div>
        @foreach($filters as $filter)
            <div x-cloak
                 x-show="$wire.activeFilter === @js($filter)"
                 class="grid grid-cols-12 gap-4 gap-y-24"
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
                        <div :key="{{$key}}"  class="col-span-12 md:col-span-6 xl:col-span-3">
                            <div
                                style="background-image: url('{{ asset($item['image'])}}');"
                                :key="{{$item['title']}}"
                                @class([
                                    'bg-gray-100 w-full bg-cover bg-no-repeat bg-center relative overflow-hidden text-white text-sm pt-64 lg:pt-72',
                                ])>

                            </div>
                            <h4>{{$item['title']}}</h4>
                            <p class="text-grey">{{$item['excerpt']}}</p>
                        </div>
                    @endforeach
                @endif


            </div>
        @endforeach
    </div>

</div>
