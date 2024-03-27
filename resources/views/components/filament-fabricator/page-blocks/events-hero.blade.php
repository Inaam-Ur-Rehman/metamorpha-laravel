@aware(['page'])
@props(['heading','content','cta','cta_url'])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-8xl mx-auto">
        <h1 class="relative font-vpc900 text-7xl text-center my-6 uppercase max-w-max mx-auto">
            {{$heading}}
            <span
                style="background-color: #FFDE59"
                class="absolute hidden xl:block left-0 w-full h-3 -z-10 bottom-2 md:h-6"
            ></span>
        </h1>
        <p class="max-w-4xl mx-auto text-center">
            {{$content}}
        </p>
        <x-button
            label="{{$cta}}"
            icon="fa fa-calendar"
            class="uppercase mx-auto my-6"
            href="{{$cta_url}}"
        />
    </div>
</div>
