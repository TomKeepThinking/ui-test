@props(['class' => '', 'reverseSm' => '', 'reverse' => '', 'animate' => true])

<x-container>
    <div {{ $attributes
                ->class(['grid grid-cols-1 sm:grid-cols-12 gap-8 '])
                ->merge(['class' => $class]) }}>

        @isset($left)
                <div {{$attributes
                    ->class([
                        'col-span-1 sm:col-span-12 lg:col-span-3 flex flex-col text-sm md:text-lg',
                        'order-last lg:order-none' => $reverseSm,
                        'lg:order-last' => $reverse,
                        'fade-in-up' => $animate
                    ])}}>

                    <div class="sticky top-32 space-y-4 "> {{ $left }}</div>



                </div>
        @endisset

        @isset($right)
            <div {{$attributes
                    ->class([
                        'col-span-1 sm:col-span-12 lg:col-span-9 ',
                        'fade-in' => $animate
                    ])}}>
                {{ $right}}
            </div>
        @endisset
    </div>
</x-container>
