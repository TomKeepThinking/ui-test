<x-app-layout>
    <div class="border-b border-concrete mb-8 pb-8">
        <x-container>
            <x-page-header class="w-2/3 pb-6 pt-32">
                <h1>Get in touch</h1>
            </x-page-header>
        </x-container>
    </div>

    <x-container>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-32">
            <div class="col-span-1 flex flex-col">
                <input id="name" class="py-2 focus:outline-none placeholder:text-grey border-b border-concrete mb-4" type="text" required placeholder="*Name...">

                <input id="email" class="py-2 focus:outline-none placeholder:text-grey border-b border-concrete" type="text" required placeholder="*Email...">

                <textarea rows="10" id="msg" class="resize-none py-2 mb-4 focus:outline-none placeholder:text-grey border-b border-concrete"  placeholder="*Message..."></textarea>

                <div class="flex justify-between">
                    <div></div>
                    <x-button class="ml-auto">
                        Subscribe
                    </x-button>
                </div>
            </div>

            <div class="col-span-1 bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/images/google-maps.png')}}');">

            </div>
        </div>
    </x-container>
</x-app-layout>
