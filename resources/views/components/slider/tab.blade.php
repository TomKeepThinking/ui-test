@props(['tab' => '', 'image' => ''])

<div class="absolute flex flex-col inset-0 w-full">
    <div
        class="h-full w-full"
        role="tabpanel"
        x-show="currentTab === @js($tab)"
        x-transition:enter="transition ease-out duration-2000"
        x-transition:enter-start="opacity-0 "
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-0"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
    >

     <div class="w-full h-full bg-cover bg-center"
          style="background-image: url('{{ asset($image)}}');">

     </div>
    </div>
</div>
