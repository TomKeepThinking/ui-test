@props(['class' => '', 'reverse' => ''])

<div
    {{
        $attributes
        ->class(['flex lg:flex-row', 'flex-col' =>  !$reverse, 'flex-col-reverse' => $reverse])
        ->merge(['class' => $class])
    }}>

    <div class="w-full lg:w-3/12">
        {{ $left }}
    </div>
    <div class="w-full lg:w-9/12">
        {{ $right}}
    </div>
</div>
