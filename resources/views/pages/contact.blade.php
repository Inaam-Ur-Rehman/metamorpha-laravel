@extends('layouts.default')

@section('main')
    <div class="px-4">
        <h1
            class="relative uppercase text-[2rem] sm:text-[3rem] md:text-[4rem] font-vpc900 max-w-max mx-auto mt-16 text-center">
            Heb je vragen over de grote
            <span
                class="absolute left-0 w-full h-2 sm:h-4 lg:h-6 -z-10 bottom-3 sm:bottom-4 md:bottom-6 lg:bottom-6 lg:bg-theme-yellow"></span>
        </h1>
        <h2 class="relative uppercase text-[2rem] sm:text-[3rem] md:text-[4rem] font-vpc900 max-w-max mx-auto  text-center">
            veranderingen in je leven of in de
            <span
                class="absolute left-0 w-full h-2 sm:h-4 lg:h-6 -z-10 bottom-3 sm:bottom-4 md:bottom-6 lg:bottom-6 lg:bg-theme-yellow"></span>
        </h2>
        <h3 class="relative uppercase text-[2rem] sm:text-[3rem] md:text-[4rem] font-vpc900 max-w-max mx-auto text-center">
            organisatie waarbinnen je werkt?
            <span
                class="absolute left-0 w-full h-2 sm:h-4 lg:h-6 -z-10 bottom-3 sm:bottom-4 md:bottom-6 lg:bottom-6 lg:bg-theme-yellow"></span>
        </h3>
        <div class="!font-vp600 text-2xl md:text-3xl italic text-center max-w-6xl mx-auto">
            <p>Neem dan contact met ons op.</p>
            <p>De toekomst wenkt, neem daarom voorsprong op het verleden!</p>
        </div>
        <div class="py-12 mx-auto my-12 bg-center bg-no-repeat bg-cover max-w-8xl"
            style="background-image: url('{{ asset('images/bg-contact.png') }}')">
            <div class="my-16">
                <h2 class="text-3xl !font-vp600 text-center uppercase text-theme-yellow">Stuur een bericht...</h2>
                <p class="max-w-md mx-auto my-4 text-xl text-center font-vp400">Heb je een vraag of ben je op zoek
                    naar informatie? Wij lezen het graag.</p>
                <div class="text-theme-yellow">
                    @livewire('message-form')
                </div>
                <div class="flex flex-col gap-6 mt-8 text-white ">
                    <h2 class="text-3xl !font-vp600 text-center uppercase text-theme-yellow">of plan een gesprek in</h2>
                    <p class="max-w-md mx-auto text-xl text-center font-vp400">Wil je graag een gesprek met Bart om kennis
                        te
                        maken en
                        over je
                        uitdagingen te spreken? Plan dan geheel vrijblijvend een gesprek in.</p>
                    <a href="https://calendly.com/bart-vanderherten"
                        class="px-2 py-2 text-xl bg-white !font-vp600 my-6 text-theme-blue rounded-full  flex items-center gap-2 mx-auto hover:scale-105 border-2 border-theme-blue">
                        Afspraak maken
                        <span class="flex items-center justify-center w-8 h-8 rounded-full bg-theme-blue">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="20" height="20" fill="url(#pattern0)" />
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                        height="1">
                                        <use xlink:href="#image0_603_7" transform="scale(0.01)" />
                                    </pattern>
                                    <image id="image0_603_7" width="100" height="100"
                                        xlink:href="data:image/png;base64,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" />
                                </defs>
                            </svg>

                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
