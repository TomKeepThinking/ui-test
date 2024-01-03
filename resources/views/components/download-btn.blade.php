<div>
    <button
        type="button"
        class="bg-red w-full rounded-lg p-2.5  text-sm
        text-white hover:bg-charcoal dark:hover:bg-white dark:hover:text-black transition-all ease font-medium
        flex "
    >
        <div class="w-1/5 flex items-center">
            <x-icons.pdf-icon class="w-12"/>
        </div>
       <div class="w-4/5 text-left flex flex-col">
           {{$slot}}
       </div>
    </button>
</div>
