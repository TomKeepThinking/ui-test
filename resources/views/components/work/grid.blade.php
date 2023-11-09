@props(['class' => '', 'work' => []])

<x-container>
    <div class="grid grid-cols-12 gap-4 {{$class}}" >
        @foreach($work as $key => $value)
            @if($key === 2 || $key === 3)
                <x-work.grid-item-lg img="#" title="Title" content="We helped to democratise the UK’s publicly owned art."/>

            @else
                <x-work.grid-item img="#" title="Title" content="We helped to democratise the UK’s publicly owned art."/>
            @endif
        @endforeach
    </div>
</x-container>
