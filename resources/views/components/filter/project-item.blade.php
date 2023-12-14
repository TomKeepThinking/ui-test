@props([
        'img' => '',
        'title' => '',
        'content' =>'',
        'image' => '',
        'class' => ''
    ])

<div x-data="{active: false}"
     @mouseover="active = true"
     @mouseleave="active = false"
    @class([
            'cursor-pointer col-span-12 mb-4
            sm:col-span-6 lg:col-span-3 even:h-96 odd:h-60',
            $class
    ])>

    <div
        style="background-image: url('{{ asset($image)}}');"
        @class([
            'w-full h-full bg-cover bg-no-repeat bg-center
            relative overflow-hidden text-white text-sm
             bg-gray-100 pt-64 lg:pt-72',

        ])>


        <x-shared.grid-overlay/>
    </div>
    <h4 class="text-grey">Tag</h4>
    <p >{{$content}}</p>
    <p class="text-grey">12.0.5.2022</p>
</div>
