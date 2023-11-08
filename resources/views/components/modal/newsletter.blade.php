<div class="w-full sm:w-newsletter h-newsletter bg-red fixed bottom-0 left-0 text-white p-8">
    <x-icon-button @click="open = false" class="absolute top-4 right-4">
        <x-icons.close-icon class="w-5 "/>
    </x-icon-button>

    <p class="mb-8">Bring innovation to your inbox and stay up to date with the latest news on our software and design projects. We will not use your email for any other purpose and we won’t pass it to anyone else.</p>

    <form action="POST" class="flex flex-col space-y-4">
        <input type="text" required placeholder="Name">
        <input type="text" required placeholder="Email">
        <x-button-secondary class="ml-auto">
            Subscribe
        </x-button-secondary>
    </form>
</div>
