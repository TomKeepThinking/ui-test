@props(['class' => '', 'route' => '#'])
<a
    wire:navigate
    href="{{$route}}"

    @class([
      'tracking-body-d underline underline-offset-4 hover:text-black cursor-pointer transition-all ease text-grey text-sm md:text-lg',
      $class
   ])>
    {{$slot}}
</a>
