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
            <div class="col-span-1 flex flex-col space-y-4">
               <x-forms.input name="name" placeholder="*Name..." :required="true"/>
               <x-forms.input name="email" placeholder="*Email..." :required="true"/>


                <x-forms.textarea name="msg" placeholder="*Message..." />


                <div class="flex justify-between items-center">
                    <div class="pl-6">
                        <label class="flex items-center text-sm cursor-pointer">
                            <input type="checkbox" class="mr-2 h-4 rounded-none w-4 border-charcoal text-indigo-600 focus:outline-none focus:ring-0">
                            Subscribe to Newsletter
                        </label>
                    </div>
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
