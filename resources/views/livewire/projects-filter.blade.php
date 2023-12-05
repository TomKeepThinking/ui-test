<div class="mb-48" x-data="{'activeImage': ''}">
    <div class="flex justify-between items-center mb-8 text-grey">

        <div class="flex space-x-4  capitalize">
            @foreach($filters as $filter)
                <div wire:click="setActiveItem(@js($filter))" @class(['cursor-pointer', 'underline' => $filter === $activeFilter])>
                    {{$filter}}
                </div>
            @endforeach
        </div>
    </div>


    <div class="relative">
        @foreach($filters as $filter)
            <div x-cloak
                 x-show="$wire.activeFilter === @js($filter)"
                 class="grid grid-cols-12 gap-4 gap-y-24 fade-in"
                 x-transition:enter.opacity.duration.500ms>

                @foreach($filteredItems as $key=>$item)
                    <x-filter.project-item
                        title="{{ $item['title'] }}"
                        content="{{ $item['excerpt'] }}"
                        image="{{ $item['image'] }}"
                        />
                @endforeach
            </div>
        @endforeach
    </div>

</div>
