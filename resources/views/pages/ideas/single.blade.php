<x-app-layout>
    <x-top-header>
        <h1>How does a DAM integration with our CMS - Qi, save time for museums and archives?</h1>
    </x-top-header>

    <x-container>
       <div class="w-full mb-12">
           <img class="w-full" src="{{asset('/storage/images/art-uk1.png')}}" alt="">
       </div>
    </x-container>

    <div class="border-t border-concrete mb-8 pt-8 z-10 relative">
        <x-content.offset class="mb-12">
            <x-slot:left>
                <div class="space-y-4">
                    <h3>12 May 2022</h3>

                    <h4>
                        <a href="#" class="hover:underline underline-offset-4">Inspiration</a>
                    </h4>
                </div>
            </x-slot:left>
            <x-slot:right>
                <div class="space-y-4">
                    <p class="lg:text-3xl text-black">Seeking innovative ways to solve problems is in the DNA of SFMOMA, the San Francisco Museum of Modern Art, says Marla Misunas, Collections Information Manager. Teams there are no strangers to working with software vendors to come up with innovative solutions.</p>

                    <p class="text-black">“We always want more than anyone can do, or has done before,” says Misunas. “It’s the nature of modern art to have pieces that no one has cataloged or put into a database before.”</p>

                    <p class="text-black pb-8">So when SFMOMA updated their Collections Management System (CMS) to Qi by Keepthinking, they wanted to “push the envelope” and improve how collections data and assets are managed. They had invested in detailed integrations between their previous CMS and their digital asset management system (NetX), but they wanted to take the functionality a step further.</p>

                    <p class="lg:text-3xl text-black">Streamlining duplicate workflows</p>

                    <p class="text-black">Previously, when the imaging team photographed a new acquisition, they would upload the images into NetX. Then, the previous CMS team would manually download that image, resize it, and upload it to the CMS. If an image got updated in one place, that update had to be manually pushed to the other system.</p>

                    <p class="text-black">Keepthinking and NetX worked together to streamline the process and improve the integration between the two platforms, both of which have native REST APIs. Now, SFMOMA’s team simply flags new images in NetX, and Qi automatically pulls a proxy image directly from NetX and connects it to the correct CMS records (for artworks, artists and exhibitions). Metadata from Qi is also automatically pushed to NetX.</p>
                </div>
            </x-slot:right>
        </x-content.offset>
    </div>

    <x-container>
        <x-page-header class="w-4/5 pb-4">
            <h2 class="lg:text-3xl">{{$quote['quote']}} <span class="text-grey">{{$quote['author']}}</span></h2>
        </x-page-header>
    </x-container>

    @foreach($content as $item)
        <div class="border-t border-concrete mb-8 pt-8 z-10 relative">
            <x-content.offset class="mb-20">
                <x-slot:left>
                    <h3 class="lg:text-3xl">{{$item['header']}}</h3>
                </x-slot:left>

                <x-slot:right>
                   <div class="space-y-4">
                       @foreach($item['content'] as $p)
                           <p class="text-black">{{$p}}</p>
                       @endforeach
                   </div>
                </x-slot:right>
            </x-content.offset>
        </div>
    @endforeach


    <div class="border-b border-concrete mb-8 pb-8 z-10 relative">
        <x-content.offset >
            <x-slot:left>

            </x-slot:left>
            <x-slot:right>
                <x-page-header>
                    <h5>Related</h5>
                </x-page-header>

            </x-slot:right>
        </x-content.offset>
    </div>

    <x-work.grid class="mb-32" :work="$work" />
</x-app-layout>
