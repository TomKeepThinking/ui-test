@props(['class' => ''])

<div
    {{ $attributes->merge([
            'class' => 'bg-black flex items-center justify-center p-4 h-56 border-b border-r ' . $class
        ]) }}>
    {{$slot}}
</div>
