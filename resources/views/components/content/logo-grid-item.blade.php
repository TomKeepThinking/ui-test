@props(['class' => ''])

<div
    {{ $attributes->merge([
            'class' => 'text-charcoal dark:text-white dark:bg-black flex items-center justify-center p-4 h-56 border-b border-r border-concrete ' . $class
        ]) }}>
    {{$slot}}
</div>
