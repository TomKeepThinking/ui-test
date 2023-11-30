<x-app-layout>
    <x-top-header>
        <h1>{{$pageHeader}}</h1>
    </x-top-header>

    <x-container>
        <div class="flex md:hidden space-x-4 mb-4">
            <h2>{{$firstContentHeader}}</h2>
            <x-link route="{{route('pages.about')}}">Learn More</x-link>
        </div>
    </x-container>

    <x-slider.hero-slider class="mb-32">
       <div class="hidden md:block">
           <h2>{{$firstContentHeader}}</h2>
           <p class="font-normal">{{$firstContentText}}</p>
           <x-link route="{{route('pages.about')}}">Learn More</x-link>
       </div>
    </x-slider.hero-slider>

    <div class="mb-8 border-b border-concrete pb-8">
        <x-content.offset>
          <x-slot:left>
              <div class="mt-auto">
                  <x-link>View work</x-link>
              </div>
          </x-slot:left>
          <x-slot:right>
              <x-page-header>
                  <h3>{{$secondContentHeader}}</h3>
              </x-page-header>
          </x-slot:right>
        </x-content.offset>
    </div>

    <x-work.grid class="mb-12 box" :work="$work" />

    <div class="mb-6 border-b border-concrete pb-4">
        <x-content.offset>
            <x-slot:left>
                <div class="mt-auto">
                   <h4>{{$thirdContentSubHeader}}</h4>
                </div>
            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h4 class="pb-4">{{$thirdContentHeader}}</h4>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset class="mb-28">
        <x-slot:left>
               <div class="text-grey">
                   <p>{{ $thirdContentText }}</p>
                   <x-link>Learn More</x-link>
               </div>
        </x-slot:left>
        <x-slot:right>
            <x-page-header>
                <img class="w-full" src="{{asset('/storage/images/white-board.png')}}" alt="">
            </x-page-header>
        </x-slot:right>
    </x-content.offset>
</x-app-layout>
