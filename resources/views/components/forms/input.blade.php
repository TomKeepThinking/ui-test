@props(['name', 'type' => 'text', 'placeholder' => '', 'required' => false])

<label class="border-b border-concrete p-0 m-0 flex h-10">
    <span class="sr-only">{{$name}} input</span>
    <input id="{{$name}}"
           class="py-2 px-0 w-full focus:outline-none focus:border-transparent placeholder:text-grey h-9
            border-none
            mb-4 focus:ring-0"
           type="text"
           require="{{$required}}"
           placeholder="{{$placeholder}}"/>
</label>
