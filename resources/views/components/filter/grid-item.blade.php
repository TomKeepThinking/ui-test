@props(['img', 'title', 'content', 'image', 'key'])

<div :key="{{$key}}" x-data="{active: false}"
     @mouseover="active = true"
     @mouseleave="active = false"
     class="col-span-12 md:col-span-6 xl:col-span-3 cursor-pointer">
    <div
        style="background-image: url('{{ asset($image)}}');"
        class="w-full bg-cover bg-no-repeat bg-center relative
        overflow-hidden text-white text-sm bg-gray-100 pt-64 lg:pt-72 mb-4">

        <x-shared.grid-overlay/>
    </div>
    <h4>{{$title}}</h4>
    <p class="text-grey">{{$content}}</p>
</div>
