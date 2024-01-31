@aware(['page'])
@props(['content'])
<div
    class="px-4 py-4 md:py-8 prose-base !font-v400 text-xl prose-headings:font-vp700 prose-ul:list-disc prose-a:font-bold prose-a:underline">
    <x-markdown>{{ $content }}</x-markdown>
</div>
