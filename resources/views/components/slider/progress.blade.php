@props(['tab' => ''])

{{$tab}}
<div class="ml-10 h-3 relative max-w-xl rounded-full overflow-hidden" >
    <div class="w-full h-full bg-gray-200 absolute top-0"></div>
    <div :class="{'w-0':currentTab !== @js($tab), 'w-full transition-all ease-out duration-1000':currentTab === @js($tab)}"
         class="h-full bg-green-500 absolute top-0"></div>
</div>
