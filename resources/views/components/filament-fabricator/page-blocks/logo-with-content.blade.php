@aware(['page'])
@props(['logo', 'content'])
<section class="my-12 !max-w-7xl !mx-auto grid grid-cols-1 md:grid-cols-3 items-center justify-items-center gap-y-4 md:justify-items-end px-4">
    <div
        class="col-span-2 text-xl lg:text-2xl !font-v400 flex flex-col gap-2 text-theme-blue"
    >
        {!! $content !!}
    </div>
    <img src="{{Storage::url($logo)}}" alt="Metamorpha" />
</section>
