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


        <div x-show="active"
             x-cloak
             x-transition:enter="transition ease-in-out duration-300 transform"
             x-transition:enter-start="translate-y-full"
             x-transition:enter-end="translate-y-0"
             x-transition:leave="transition ease-in-out duration-300"
             x-transition:leave-start="translate-y-full"
             x-transition:leave-end="translate-y-full"
             class="absolute inset-0 bg-red flex flex-col justify-between  p-4 ">



            <div>
                <h5>Title</h5>
                <p class="text-sand">CMS, Information</p>
            </div>

            <p class="text-sand">Powered by <x-link route="{{route('pages.qi')}}" class="text-white">Qi</x-link></p>
        </div>
    </div>
    <h4 class="text-grey">Tag</h4>
    <p >{{$content}}</p>
    <p class="text-grey">12.0.5.2022</p>
</div>
