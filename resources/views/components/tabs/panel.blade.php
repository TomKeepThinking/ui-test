@props(['tab' => ''])

<article
    id="tabpanel-{{$tab}}"
    class="w-full bg-white rounded-2xl shadow-xl min-[480px]:flex items-stretch focus-visible:outline-none focus-visible:ring focus-visible:ring-indigo-300"
    x-show="activeTab === @js($tab)"
    x-transition:enter="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-700 transform order-first"
    x-transition:enter-start="opacity-0 "
    x-transition:enter-end="opacity-100 "
    x-transition:leave="transition ease-[cubic-bezier(0.68,-0.3,0.32,1)] duration-300 transform absolute"
    x-transition:leave-start="opacity-100 "
    x-transition:leave-end="opacity-0"
>
    {{$slot}}
</article>
