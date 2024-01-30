@aware(['page'])
@props([
    'image',
    'content',
    'direction',
    'button_text',
    'button_url',
    'button_icon'
])
@if($direction === "left")
    <div
        class="grid grid-cols-1 px-4 py-4 text-white lg:gap-8 lg:grid-cols-3 bg-theme-blue lg:py-0 lg:px-0"
    >
        <img
            src="{{Storage::url($image)}}"
            alt="Leven in transitie"
            class="object-cover h-full mx-auto rounded-md lg:rounded-none"
        />
        <div class="col-span-2 gap-2 px-4 py-6 prose-base prose-strong:text-theme-yellow prose-ul:list-disc">
            {!! $content !!}
            @if($button_text)
                <x-button
                    href="{{$button_url}}"
                    class="mx-auto mt-4 block text-center"
                    icon="{{$button_icon}}"
                    color="secondary"
                    label="{{$button_text}}"
                />
            @endif
        </div>
    </div>
    @else
    <div
        class="grid grid-cols-1 px-4 py-4 text-white lg:gap-8 lg:grid-cols-3 bg-theme-blue lg:py-0 lg:px-0"
    >
            <div class="col-span-2 gap-2 px-4 py-6 prose-base prose-strong:text-theme-yellow prose-ul:list-disc">
                {!! $content !!}

                @if($button_text)
                <x-button
                    href="{{$button_url}}"
                    class="mx-auto mt-4 block text-center"
                    icon="{{$button_icon}}"
                    color="secondary"
                    label="{{$button_text}}"
                    />
                @endif
            </div>
        <img
            src="{{Storage::url($image)}}"
            alt="Leven in transitie"
            class="object-cover h-full mx-auto rounded-md lg:rounded-none"
        />
    </div>
@endif
