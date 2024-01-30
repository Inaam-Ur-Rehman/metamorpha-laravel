@aware(['page'])
@props(['content','button_text','button_link','icon'])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-8xl mx-auto bg-theme-blue py-16 px-4">
        <div class="max-w-5xl mx-auto prose-base text-white prose-headings:text-theme-yellow prose-ul:list-disc list-disc">
        {!! $content !!}
        </div>
        <x-button href="{{$button_link}}" icon="{{$icon}}" label="{{$button_text}}" color="secondary" class="mt-8 mx-auto uppercase" />
    </div>
</div>
