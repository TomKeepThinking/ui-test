@props(['class' => ''])

<button
    {{ $attributes->merge([
        'type'  => 'button',
        'class' => 'bg-white rounded-3xl py-2.5 px-5 text-red hover:bg-charcoal transition-all ease ' . $class
    ]) }}>

    {{$slot}}
</button>
