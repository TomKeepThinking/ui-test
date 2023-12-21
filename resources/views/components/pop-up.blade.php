@props(['x', 'y', 'key', 'id', 'content', 'name'])

@php($ref = 'pop-' . $id)

<div class="absolute" style="top:{{$x}}px; left:{{$y}}px" >
    <div
        x-transition
        class="w-6 h-6 rounded-full bg-red transition-all ease cursor-pointer flex items-center justify-center shadow"
        :class="{ 'bg-red': popup === {{$key}}, 'bg-black': popup!== {{$key}} }"
        x-cloak

        @mouseover="popup = {{$key}}"
        @mouseleave="popup = ''"

        x-ref="{{$ref}}"
    >

        <span class="text-xxs">{{$key+1}}</span>

        <span class="transition-all ease w-2 h-2 absolute -bottom-[1px] rotate-45"
              :class="{ 'bg-red': popup === {{$key}}, 'bg-black': popup!== {{$key}} }"></span>

        <div x-show="popup === {{$key}}"
             id="popup-{{$id}}"
             x-transition
             class="z-10 absolute p-4 rounded-sm top-8 w-[300px] text-white bg-black shadow-card">
            <h4>{{$key . ' ' . $name}}</h4>
            <p class="text-concrete"> {{ $content}}</p>
        </div>
    </div>
</div>
