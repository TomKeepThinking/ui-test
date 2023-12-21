<x-app-layout>
    <x-top-header>
        <h1 class="split-words">
            Get in touch
        </h1>
    </x-top-header>


    <x-container>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-32">
            <div class="col-span-1 flex flex-col space-y-4">
               <x-forms.input name="name" placeholder="*Name..." :required="true"/>
               <x-forms.input name="email" placeholder="*Email..." :required="true"/>

                <x-forms.textarea name="msg" placeholder="*Message..." />


                <div class="flex justify-between items-center">
                    <div>
                        <label class="flex items-center text-sm cursor-pointer">
                            <input type="checkbox" class="mr-2 h-4 rounded-none w-4 border-charcoal text-indigo-600 focus:outline-none focus:ring-0">
                            Subscribe to Newsletter
                        </label>
                    </div>
                    <x-button class="ml-auto">
                        Submit
                    </x-button>
                </div>
            </div>


            <x-map-widget></x-map-widget>

            <div class="col-span-1 bg-cover bg-no-repeat bg-center" style="background-image: url('{{ asset('storage/images/google-maps.png')}}');">

            </div>
        </div>
    </x-container>
</x-app-layout>
