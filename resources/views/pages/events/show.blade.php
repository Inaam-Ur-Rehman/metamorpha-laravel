@extends('layouts.default')

@section('main')
    <div class="max-w-8xl mx-auto my-4 px-4">
        <h1 class="text-4xl md:text-5xl lg:text-7xl !font-vpc700 uppercase leading-snug">
            {{ $event->title }}
        </h1>

        <div class="aspect-video max-w-5xl my-8 mx-auto relative"
            x-data="{ play: false, show: false}"
            x-cloak
             @mouseenter="show = true"
                @mouseleave="show = false"
        >
            <button class="absolute transform
            w-16 h-16 flex items-center justify-center
            -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 bg-theme-blue text-white p-4 rounded-full z-10 focus:outline-none
            " onclick="
                const video = this.nextElementSibling;
                if (video.paused) {
                    video.play();
                } else {
                    video.pause();
                }
            " x-show="show"
                @click="play = !play"
            >

                <i class="fas fa-play text-3xl"
                    x-show="!play"
                ></i>
                <i class="fas fa-pause text-3xl"
                    x-show="play"
                ></i>
            </button>
            <video class="w-full  -z-10"
            >
                <source src="{{ Storage::url($event->video) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 bg-theme-light-blue" x-data="{ show: false }" x-cloak>
            <img src="{{ Storage::url($event->bannerImage) }}" alt="Image"
                 class="object-cover object-center w-full h-full col-span-4 max-h-full" />
            <div class="flex flex-col col-span-8 px-6 py-6 prose-base prose-ul:list-disc">
                <x-markdown>
                    {{ $firstText }}
                </x-markdown>
                @if($secondText)
                    <p
                        @click="show = !show"
                        x-show="!show"
                        class=" cursor-pointer text-center uppercase font-bold">
                        Meer
                        <i class="fas fa-caret-down"></i>
                    </p>
                @endif
            </div>
            @if($secondText)
                <div x-show="show" class="col-span-12 px-6 py-6 prose-base prose-ul:list-disc">
                    <x-markdown>
                        {{ $secondText }}
                    </x-markdown>
                </div>

            @endif
            <p x-show="show" @click="show = !show" class="col-span-12 font-bold mb-2 flex items-center mx-auto justify-center gap-1 cursor-pointer text-center uppercase">
                VERBERGEN
                <i class="fas fa-caret-up"></i>
            </p>
        </div>

        <div class="content prose-xl prose-h2:font-vpc700 prose-h2:uppercase prose-h2:max-w-max">
            <x-markdown>
                {{ $event->description }}
            </x-markdown>
            <x-button
                label="Schrijf nu in"
                icon="fa fa-user-plus"
                class="uppercase mx-auto my-6"
                href="{{ route('events.register', $event->slug) }}"
            />
        </div>
    </div>
@endsection
