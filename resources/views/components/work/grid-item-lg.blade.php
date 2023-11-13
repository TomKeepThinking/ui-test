@props(['img' => '', 'title' => '', 'content' =>''])

<div x-data="{active: false}"
     @mouseover="active = true"
     @mouseleave="active = false"
     class="col-span-12 sm:col-span-12 lg:col-span-6 cursor-pointer">

    <div class="w-full pt-64 lg:pt-work-lg bg-gray-300 relative overflow-hidden text-white text-sm">
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

            <p class="text-sand">Powered by <x-link class="text-white">Qi</x-link></p>
        </div>
    </div>
    <h4>{{$title}}</h4>
    <p class="text-grey">{{$content}}</p>
</div>
