@aware(['page'])
@props(['content', 'image', 'vertical_title', 'direction', 'tag_id'])
@if ($direction == 'left')
    <div class="px-4 py-4 md:py-8" id="{{ $tag_id }}">
        <div class="mx-auto max-w-8xl">
            <div class="grid grid-cols-1 md:grid-cols-12">
                <img src="{{ Storage::url($image) }}" alt="Image"
                    class="object-cover object-center w-full h-full col-span-3" />
                <div class="flex flex-col col-span-8 px-6 py-6 bg-theme-light-blue prose-base prose-ul:list-disc">
                    {!! $content !!}
                </div>
                <h2
                    class="!font-vpc900  text-xl md:text-5xl bg-theme-blue text-theme-yellow col-span-1 py-4 text-center flex items-center justify-center md:verticle">
                    <span class="max-h-[500px]">{{ $vertical_title }}</span>
                </h2>
            </div>
        </div>
    </div>
@elseif($direction == 'right')
    <div class="px-4 py-4 md:py-8" id="{{ $tag_id }}">
        <div class="mx-auto max-w-8xl">
            <div class="grid grid-cols-1 md:grid-cols-12">
                <h2
                    class="!font-vpc900  text-xl md:text-5xl bg-theme-blue text-theme-yellow col-span-1 py-4 text-center flex items-center justify-center md:verticle">
                    <span class="max-h-[500px] md:rotate-180">{{ $vertical_title }}</span>
                </h2>
                <div class="flex flex-col col-span-8 px-6 py-6 bg-theme-light-blue prose-base prose-ul:list-disc">
                    {!! $content !!}
                </div>
                <img src="{{ Storage::url($image) }}" alt="Image"
                    class="object-cover object-center w-full h-full col-span-3" />
            </div>
        </div>
    </div>
@endif
