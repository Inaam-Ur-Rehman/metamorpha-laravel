@aware(['page'])

@props(['content', 'image'])
<div class="items-center px-4 py-4 my-16 md:py-8">
    <div class="grid grid-cols-1 gap-8 mx-auto max-w-8xl lg:grid-cols-3">
        <div
            class="lg:col-span-2 !font-v400 prose-base prose-ul:list-disc prose-a:underline underline-offset-2 prose-h2:font-vpc700 
                prose-h2:text-3xl md:prose-h2:text-6xl prose-h2:uppercase prose-h2:mb-4 
                prose-h3:text-2xl prose-h3:font-vpc700  prose-h3:uppercase prose-h3:mt-8
            ">
            {!! $content !!}
        </div>
        <div class="self-center justify-self-center">
            <img src="{{ Storage::url($image) }}" alt="Bart" class="w-full" />
        </div>
    </div>
</div>
