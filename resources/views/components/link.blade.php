@props(['class' => '', 'route' => '#'])
<a
    href="{{$route}}"
    {{ $attributes->merge([
       'class' => 'underline cursor-pointer hover:opacity-60 transition-opacity ease text-grey ' . $class
   ]) }}>
    {{$slot}}
</a>
