@aware(['page'])
@props([
    'heading','subHeading',
    'btnLabel','btnLink',
    'text', 'video',
    'poster'
    ])
<div class="relative w-full min-h-screen">
    <div
        class="absolute text-white z-40 transform -translate-x-[20%] top-[20%] left-[20%] -translate-y-[20%] px-4"
    >
        <h1 class="heading-hero font-v400">{{$heading}}</h1>
        <p class="text-xl text-white">{{$subHeading}}</p>
        <a
            type="button"
            href="{{$btnLink}}"
                class="rounded-full inline-block px-4 py-2 text-theme-blue bg-white !font-v400 mt-16" >{{$btnLabel}}</a
        >
    </div>
    <video
        onloadstart="this.playbackRate=0.5"
        autoplay
        muted
        loop
        poster={{Storage::url($poster)}}
        id="myVideo"
        class="object-cover w-full max-h-screen min-h-screen"
    >
        <source src="{{Storage::url($video)}}" type="video/mp4" class="w-full" />
    </video>
    <p
        class="absolute text-white !font-vpc700 bottom-[10%] md:bottom-[15%] block mx-auto text-center w-full text-3xl uppercase px-16"
    >
        Voor organisaties en mensen in transitie en transformatie
    </p>
</div>
