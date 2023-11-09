<x-app-layout>
    <x-container>
        <x-page-header class="w-2/3 pb-6 pt-32">
            <h1>Collection Management Software & Digital Design for Arts, Culture & Heritage</h1>
        </x-page-header>
    </x-container>


    <div class="border-t border-concrete pt-6 mb-12">
        <x-content.offset>
            <x-slot:left>
                <h2>Qi Collections Management</h2>
                <p class="font-normal">Take control of your entire operations with customisable, integrable content & collections management system.</p>
                <x-link route="{{route('pages.about')}}">Learn More</x-link>
            </x-slot:left>

            <x-slot:right>
                <img class="w-full" src="{{asset('/storage/images/laptop-falling.png')}}" alt="">
            </x-slot:right>
        </x-content.offset>
    </div>

    <div class="mb-8 border-b border-concrete pb-8">
        <x-content.offset>
          <x-slot:left>
              <div class="mt-auto">
                  <x-link>View work</x-link>
              </div>
          </x-slot:left>
          <x-slot:right>
              <x-page-header>
                  <h3>Harnessing technology that helps to shape the way we experience culture & history</h3>
              </x-page-header>
          </x-slot:right>
        </x-content.offset>
    </div>

    <x-work.grid class="mb-12" />

    <div class="mb-6 border-b border-concrete pb-4">
        <x-content.offset>
            <x-slot:left>
                <div class="mt-auto">
                   <h4>About us</h4>
                </div>
            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h4 class="pb-4">We’re a software and design agency operating for over twenty years</h4>
                </x-page-header>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-content.offset>
        <x-slot:left>
               <div class="text-grey">
                   <p>Our diverse team of managers, engineers and designers work from our headquarters in London.</p>
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
