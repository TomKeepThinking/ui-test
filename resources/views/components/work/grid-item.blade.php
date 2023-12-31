@props(['img' => '', 'title' => '', 'content' =>'', 'image' => '', 'large' => false, 'class' => ''])

<div x-data="{active: false}"
    @mouseover="active = true"
    @mouseleave="active = false"
    @class([
            'cursor-pointer grid-item ',
            'col-span-6 sm:col-span-6 lg:col-span-3' =>  !$large,
            'col-span-12 sm:col-span-6 lg:col-span-6' => $large,
        ])>

    <div
        style="background-image: url('{{ asset($image)}}');"
        @class([
            'w-full bg-cover bg-no-repeat bg-center relative
            overflow-hidden text-white text-sm bg-gray-100 mb-4 ' .$class,
            'pt-40 lg:pt-72' =>  !$large,
            'pt-work-sm lg:pt-work-lg' => $large,
        ])>


        <x-shared.grid-overlay/>
    </div>

    <h4 class="text-sm md:text-lg tracking-body-d !leading-6">{{$title}}</h4>
    <p class="text-grey text-sm md:text-lg tracking-body-d !leading-6">{{$content}}</p>
</div>
