@props(['class' => '', 'reverse' => ''])

<x-container>
    <div {{ $attributes
                ->class(['grid grid-cols-12 gap-4'])
                ->merge(['class' => $class]) }}>
        <div {{$attributes
                ->class(['col-span-12 lg:col-span-3 flex flex-col', 'order-last lg:order-none' => $reverse])}}>
            {{ $left }}
        </div>
        <div class="col-span-12 lg:col-span-9">
            {{ $right}}
        </div>
    </div>
</x-container>
