@extends('layouts.default')

@section('main')
    <div class="max-w-8xl mx-auto my-4 px-4">
        <h1 class="text-4xl md:text-5xl lg:text-7xl !font-vpc700 uppercase leading-snug">
            {{ $event->title }}
        </h1>
        <div class="aspect-video rounded-md overflow-hidden !max-w-5xl my-12 mx-auto w-full">
            <video id="my-video" class="video-js vjs-theme-fantasy ">
                <source src="{{ Storage::url($event->video) }}" type="video/mp4" />
            </video>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-12 bg-theme-light-blue" x-data="{ show: false }" x-cloak>
            <img src="{{ Storage::url($event->bannerImage) }}" alt="Image"
                class="object-cover object-center w-full h-full col-span-4 max-h-full" />
            <div class="flex flex-col col-span-8 px-6 py-6 prose-base prose-ul:list-disc prose-ol:list-decimal">
                <x-markdown>
                    {{ $firstText }}
                </x-markdown>
                @if ($secondText)
                    <p @click="show = !show" x-show="!show" class=" cursor-pointer text-center uppercase font-bold">
                        Meer
                        <i class="fas fa-caret-down"></i>
                    </p>
                @endif
            </div>
            @if ($secondText)
                <div x-show="show" class="col-span-12 px-6 py-6 prose-base prose-ul:list-disc prose-ol:list-decimal ">
                    <x-markdown>
                        {{ $secondText }}
                    </x-markdown>
                </div>
            @endif
            <p x-show="show" @click="show = !show"
                class="col-span-12 font-bold mb-2 flex items-center mx-auto justify-center gap-1 cursor-pointer text-center uppercase">
                VERBERGEN
                <i class="fas fa-caret-up"></i>
            </p>
        </div>

        <div
            class="content prose-xl prose-h2:font-vpc700 prose-h2:uppercase prose-h2:max-w-max prose-ul:list-disc
            prose-ol:list-decimal mt-8 prose-h2:text-4xl">
            {!! $event->description !!}
            <x-button label="Schrijf
            nu in" icon="fa fa-user-plus" class="uppercase mx-auto my-6"
                href="{{ route('events.register', $event->slug) }}" />
        </div>
    </div>
@endsection
