@props(['class' => '', 'reverseSm' => '', 'reverse' => ''])

<x-container>
    <div {{ $attributes
                ->class(['grid grid-cols-1 sm:grid-cols-12 gap-12'])
                ->merge(['class' => $class]) }}>

        <div {{$attributes
                ->class([
                    'col-span-1 sm:col-span-12 lg:col-span-3 flex flex-col',
                    'order-last lg:order-none' => $reverseSm,
                    'lg:order-last' => $reverse
                ])}}>
            {{ $left }}
        </div>

        <div class="col-span-1 sm:col-span-12 lg:col-span-9">
            {{ $right}}
        </div>
    </div>
</x-container>
