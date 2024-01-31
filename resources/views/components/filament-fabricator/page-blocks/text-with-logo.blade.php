@aware(['page'])

@props(['content', 'image'])
<div class="px-4 py-4 md:py-8">
    <div class="grid grid-cols-1 gap-8 mx-auto max-w-8xl md:grid-cols-2">
        <div class=" !font-v400 prose-base prose-ul:list-disc prose-a:underline underline-offset-2">
            {!! $content !!}
        </div>
        <div class="">
            <img src="{{ Storage::url($image) }}" alt="Bart" class="w-80" />
        </div>
    </div>
</div>
