@props(['class' => '', 'route' => '#'])
<a
    wire:navigate
    href="{{$route}}"
    {{ $attributes->merge([
       'class' => 'underline cursor-pointer hover:opacity-60 transition-opacity ease text-grey ' . $class
   ]) }}>
    {{$slot}}
</a>
