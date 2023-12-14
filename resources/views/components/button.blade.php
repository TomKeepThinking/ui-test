@props(['class' => ''])

<button
    {{ $attributes->merge([
        'type'  => 'button',
        'class' => 'bg-red rounded-3xl py-2.5 text-sm px-5 text-white hover:bg-charcoal transition-all ease ' . $class
    ]) }}>
    {{$slot}}
</button>

