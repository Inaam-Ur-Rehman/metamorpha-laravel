@aware(['page'])
@props(['content'])

<style>
    .text-block
    h1, h2, h3, h4, h5, ::after {
        background-color: transparent !important;
    }
</style>
<div class="text-block px-4 py-4 md:py-8 prose min-w-full prose-headings:uppercase
    prose-a:text-theme-blue
    prose-headings:font-bold
    prose-headings:font-vpc600
    prose-headings:text-theme-blue
">
 {!! $content !!}
    </div>
