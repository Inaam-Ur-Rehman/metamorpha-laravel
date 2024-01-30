@aware(['page'])
@props(['title','description'])
<div class="py-8 my-8 bg-theme-blue">
    <div class="max-w-4xl px-4 mx-auto">
        <h2
            class="my-2 text-2xl md:text-3xl text-theme-yellow !font-vpc700 uppercase leading-relaxed"
        >
            {{ $title}}
        </h2>
        <div class="flex flex-col gap-8 mt-6 text-white !font-vpc300 text-xl">
            {!! $description !!}
        </div>
    </div>
</div>
