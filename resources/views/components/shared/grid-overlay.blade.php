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
        <h5 class="text-white">Title</h5>
        <p class="text-sand">CMS, Information</p>
    </div>

    <p class="text-sand text-sm">Powered by <x-link route="{{route('pages.qi')}}" class="text-white !text-sm">Qi</x-link></p>
</div>
