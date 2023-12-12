@props(['img' => '', 'title' => '', 'content' =>'', 'image' => '', 'large' => false, 'class' => ''])

<div x-data="{active: false}"
    @mouseover="active = true"
    @mouseleave="active = false"
    @class([
            'cursor-pointer grid-item',
            'col-span-6 sm:col-span-6 lg:col-span-3' =>  !$large,
            'col-span-12 sm:col-span-6 lg:col-span-6' => $large,
        ])>

    <div
        style="background-image: url('{{ asset($image)}}');"
        @class([
            'w-full bg-cover bg-no-repeat bg-center relative overflow-hidden text-white text-sm bg-gray-100 mb-4 ' .$class,
            'pt-40 lg:pt-72' =>  !$large,
            'pt-work-sm lg:pt-work-lg' => $large,
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



            <div class="">
                <h5>Title</h5>
                <p class="text-sand">CMS, Information</p>
            </div>

            <p class="text-sand">Powered by <x-link route="{{route('pages.qi')}}" class="text-white">Qi</x-link></p>
        </div>
    </div>

    <h4 class="text-sm md:text-lg">{{$title}}</h4>
    <p class="text-grey text-sm md:text-lg">{{$content}}</p>
</div>
