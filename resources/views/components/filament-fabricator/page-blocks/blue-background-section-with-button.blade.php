@aware(['page'])
@props(['content', 'buttons'])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-8xl mx-auto bg-theme-blue py-16 px-4">
        <div
            class="max-w-5xl mx-auto prose-base text-white prose-headings:text-theme-yellow prose-ul:list-disc list-disc">
            {!! $content !!}
        </div>
        <div class="flex flex-col md:flex-row justify-center gap-4 mt-8 items-center">
            @foreach ($buttons as $button)
                <x-button :href="$button['url']" :label="$button['text']" :icon="$button['icon']" color="secondary" />
            @endforeach
        </div>
    </div>
</div>
