@props(['class' => '', 'route' => '#'])
<a
    wire:navigate
    href="{{$route}}"
    {{ $attributes->merge([
       'class' => 'tracking-body-d underline underline-offset-4 cursor-pointer hover:opacity-60 transition-opacity ease text-grey text-sm md:text-lg ' . $class
   ]) }}>
    {{$slot}}
</a>
