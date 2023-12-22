@props(['open' => false])

<div>

   <div class="flex flex-col mb-2 w-5 h-5 relative">
       <div
           @class([
               'w-[28px] h-[2px] mb-1.5 bg-red origin-center transition-all ease',
               'transform rotate-45 bg-white mt-[4px]' => $open
           ])></div>

       <div
              @class([
                'w-[28px] h-[2px] mb-1.5 bg-red origin-center transition-all ease absolute',
                'top-[8px]' => !$open,
                'transform -rotate-45 bg-white top-[4px]' => $open
              ])></div>
   </div>
</div>
