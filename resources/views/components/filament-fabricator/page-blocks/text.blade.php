@aware(['page'])
@props(['content'])

<style>
    .text-block h1,
    h2,
    h3,
    h4,
    h5,
    ::after {
        background-color: transparent !important;
    }
</style>
<div
    class="min-w-full px-4 py-4 prose text-block md:py-8 prose-headings:uppercase prose-a:text-theme-blue prose-headings:font-bold md:prose-h2:!text-3xl prose-headings:font-vpc600 prose-headings:text-theme-blue ">
    {!! $content !!}
</div>
