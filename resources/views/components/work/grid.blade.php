@props(['class' => '', 'work' => []])

<x-container>
    <div class="grid grid-cols-12 gap-x-5 gap-y-12 {{$class}}" >
        @foreach($work as $key => $value)
            @if($key === 2 || $key === 3)
                <x-work.grid-item img="#" title="{{ $value['title'] }}" content="{{ $value['excerpt'] }}" :large="true"/>
            @else
                <x-work.grid-item img="#"  title="{{ $value['title'] }}" content="{{ $value['excerpt'] }}"/>
            @endif
        @endforeach
    </div>
</x-container>
