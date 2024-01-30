@aware(['page'])
@props(['heading', 'color'])

    <h2
        class="relative max-w-max text-3xl uppercase !font-vpc900 md:text-4xl lg:text-8xl mr-auto mx-4 my-16"
    >
        {{$heading}}
        <span
            style="background-color: {{$color}}"
            class="absolute left-0 w-full h-3 -z-10 bottom-2  md:h-8"
        ></span>
    </h2>

