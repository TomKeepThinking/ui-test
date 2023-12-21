@props(['class' => '', 'route' => '#', 'opacity' => true])
<a
    wire:navigate
    href="{{$route}}"

    @class([
      'tracking-body-d underline underline-offset-4 cursor-pointer transition-opacity ease text-grey text-sm md:text-lg',
      'hover:opacity-60' => $opacity,
      $class
   ])>
    {{$slot}}
</a>
