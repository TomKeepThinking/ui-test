@props(['class' => '', 'route' => '#'])
<a
    wire:navigate
    href="{{$route}}"

    @class([
      'tracking-body-d underline underline-offset-4 cursor-pointer hover:text-white transition-all ease text-concrete text-sm md:text-lg',
      $class
   ])>
    {{$slot}}
</a>
