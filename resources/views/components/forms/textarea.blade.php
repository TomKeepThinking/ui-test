@props(['name', 'placeholder' => '', 'required' => false])

<label class="border-b border-concrete">
    <span class="sr-only">{{$name}} textarea</span>
    <textarea
        rows="10"
        id="{{$name}}"
        placeholder="{{$placeholder}}"
        class="resize-none py-2 px-0 mb-4 !outline-none focus:ring-0 w-full
            placeholder:text-grey border-none"></textarea>
</label>

