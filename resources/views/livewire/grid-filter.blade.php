<div class="mb-12">
    <div class="flex space-x-4 text-grey capitalize mb-8">
        @foreach($filters as $filter)
           <div wire:click="setActiveItem(@js($filter))" @class(['cursor-pointer', 'underline' => $filter === $activeFilter])>
               {{$filter}}
           </div>
        @endforeach
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
                                'w-full bg-cover bg-no-repeat bg-center relative overflow-hidden text-white text-sm pt-64 lg:pt-72',
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
