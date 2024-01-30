@aware(['page'])

@props([
    'title',
    'subtitle',
    'text',
    'btnText',
    'btnLink',
])
<div class="px-4 py-4 md:py-8">
    <h1
        class="relative uppercase text-[3rem] md:text-[4rem] lg:text-[6rem] font-vpc900 max-w-max mx-auto leading-tight"
    >
        {{ $title }}
        <span
            class="absolute left-0 w-full h-4 lg:h-6 -z-10 bottom-4 md:bottom-6 lg:bottom-[18%] bg-[#7FE0FA]"
        ></span>
    </h1>
    <h2
        class="relative uppercase text-[2rem] sm:text-[3rem] md:text-[4rem] font-vpc700 max-w-max mx-auto text-center leading-tight"
    >
        {{ $subtitle }}
        <span
            class="absolute left-0 hidden w-full h-2 md:block sm:h-4 lg:h-6 -z-10 bottom-3 sm:bottom-4 md:bottom-6 lg:bottom-4 lg:bg-theme-yellow"
        ></span>
    </h2>
    <p
        class="max-w-xl mx-auto text-center text-theme-blue !font-v700 font-bold text-2xl mt-12"
    >
        {{ $text }}
    </p>
    <x-button
        class="mx-auto mt-12"
        icon="fas fa-heart"
        href="{{ $btnLink }}"
        target="_blank"
        color="primary"
        label="{{ $btnText}}"
    />
</div>
