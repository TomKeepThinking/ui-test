@props(['img', 'title', 'content', 'image', 'key'])

<div :key="{{$key}}" x-data="{active: false}"
     @mouseover="active = true"
     @mouseleave="active = false"
     class="col-span-12 md:col-span-6 xl:col-span-3 cursor-pointer">
    <div
        style="background-image: url('{{ asset($image)}}');"
        class="'w-full bg-cover bg-no-repeat bg-center relative overflow-hidden text-white text-sm bg-gray-100 pt-64 lg:pt-72'">

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
                <h3>Title</h3>
                <p class="text-sand">CMS, Information</p>
            </div>

            <p class="text-sand">Powered by <x-link route="{{route('pages.qi')}}" class="text-white">Qi</x-link></p>
        </div>
    </div>
    <h4>{{$title}}</h4>
    <p class="text-grey">{{$content}}</p>
</div>
