@aware(['page'])
@props(['heading', 'subHeading', 'btnLabel', 'btnLink', 'text', 'video', 'poster'])
<div class=" w-full min-h-screen">
    <div class=" text-white z-40 transform  px-4 max-w-full">
        <h1 class="heading-hero text-4xl">{{ $heading }}</h1>
        <p class="text-xl text-white">{{ $subHeading }}</p>
        <a type="button" href="{{ $btnLink }}"
            class="rounded-full inline-block px-4 py-2 text-theme-blue bg-white !font-v400 mt-16">{{ $btnLabel }}</a>
    </div>
    <video autoplay muted loop poster={{ Storage::url($poster) }} id="myVideo"
        class="object-cover w-full max-h-screen min-h-screen">
        <source src="{{ Storage::url($video) }}" type="video/mp4" class="w-full" />
    </video>
    <p
        class="absolute text-white !font-vpc700 bottom-[10%] md:bottom-[15%] block mx-auto text-center w-full text-3xl uppercase px-16">
        {{ $text }}
    </p>
</div>