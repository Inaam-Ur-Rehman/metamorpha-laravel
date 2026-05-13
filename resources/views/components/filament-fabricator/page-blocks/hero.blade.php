@aware(['page'])
@props(['heading', 'subHeading', 'btnLabel', 'btnLink', 'text', 'video', 'poster'])

<div class="relative w-full h-screen overflow-hidden">
    {{-- Background: Video if available, otherwise fallback to Poster Image --}}
    @if($video)
        <video autoplay muted loop playsinline poster="{{ Storage::url($poster) }}" id="myVideo"
            class="absolute inset-0 object-cover w-full h-full -z-10">
            <source src="{{ Storage::url($video) }}" type="video/mp4" />
        </video>
    @elseif($poster)
        <img src="{{ Storage::url($poster) }}" class="absolute inset-0 object-cover w-full h-full -z-10"
            alt="{{ $heading }}">
    @else
        {{-- Fallback color if both are null --}}
        <div class="absolute inset-0 bg-theme-blue -z-10"></div>
    @endif

    {{-- Main Content Container (Centered Vertically and Horizontally) --}}
    <div class="absolute inset-0 z-40 flex flex-col items-center justify-center px-4 text-center">
        <div class="max-w-4xl w-full">
            {{-- Heading: 4rem on desktop (original design), responsive on mobile --}}
            <h1 class="heading-hero font-vp900 leading-tight" style="font-size: clamp(2.2rem, 6vw, 4rem);">
                {{ $heading }}
            </h1>

            {{-- Subheading --}}
            <p class="mt-4 text-xl md:text-2xl text-white">{{ $subHeading }}</p>

            {{-- CTA Button --}}
            @if($btnLabel)
                <a href="{{ $btnLink }}"
                    class="inline-block px-8 py-3 mt-10 text-theme-blue bg-white rounded-full font-v400 transition-transform hover:scale-105">
                    {{ $btnLabel }}
                </a>
            @endif
        </div>
    </div>

    {{-- Bottom Quote/Text: 3xl on desktop (original design), responsive on mobile --}}
    @if($text)
        <div class="absolute bottom-[10%] md:bottom-[12%] z-40 w-full px-6 text-center">
            <p class="text-white font-vpc700 uppercase tracking-wider" style="font-size: clamp(1.2rem, 3.5vw, 1.875rem);">
                {{ $text }}
            </p>
        </div>
    @endif

    {{-- Subtle Overlay to ensure text readability against light backgrounds/videos --}}
    <div class="absolute inset-0 bg-black/20 z-10"></div>
</div>