<div class="w-full sm:w-newsletter h-newsletter bg-red fixed bottom-0 left-0 text-white p-8 ">
    <x-icon-button @click="open = false" class="absolute top-4 right-4">
        <div class="sr-only">Close button</div>
        <x-icons.close-icon class="w-5 "/>
    </x-icon-button>

    <p class="mb-8 tracking-body-d leading-6">Bring innovation to your inbox and stay up to date with the latest news on our software and design projects. We will not use your email for any other purpose and we won’t pass it to anyone else.</p>

    <form action="POST" class="flex flex-col space-y-4">
        <label class="border-b border-white p-0 m-0 flex h-10">
            <span class="sr-only">Name</span>
            <input id="name"
                   class="py-2 px-0 w-full  text-white bg-red placeholder:text-white focus:outline-none focus:border-transparent h-9 border-none mb-4 focus:ring-0"
                   type="text"
                   require
                   placeholder="*Name..."/>
        </label>

        <label class="border-b border-white p-0 m-0 flex h-10">
            <span class="sr-only">Email</span>
            <input id="email"
                   class="py-2 px-0 w-full  text-white bg-red placeholder:text-white focus:outline-none focus:border-transparent h-9 border-none mb-4 focus:ring-0"
                   type="text"
                   require
                   placeholder="*Email..."/>
        </label>


        <x-button-secondary class="ml-auto">
            Subscribe
        </x-button-secondary>
    </form>
</div>
