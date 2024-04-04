@props(['page'])
@extends('layouts.default')

@section('main')
    <div class="py-6 mx-auto ">
        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
        <div class="px-4 my-6">
            @foreach ($events as $event)
                <div class="bg-theme-blue max-w-7xl mx-auto flex flex-col lg:flex-row gap-4">
                    <img src="{{ Storage::url($event->thumbnail) }}" alt="{{ $event->title }}" class="w-full lg:max-w-[450px]">
                    <div class="flex flex-col gap-2 items-center w-full py-4">
                        <h2 class="text-3xl max-w-lg text-center !font-vpc600 uppercase text-theme-yellow">
                            {{ $event->title }}
                        </h2>
                        <p class="text-base text-theme-yellow !font-v700 text-center md:text-left">
                            {{ $event->subTitle }}
                        </p>
                        <p class="text-white text-center px-6">
                            {{ $event->excerpt }}
                        </p>
                        <x-button label="MEER INFORMATIE" icon="fa-solid fa-circle-info" class="uppercase mx-auto my-4"
                            color="secondary" href="{{ route('events.show', $event->slug) }}" />
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
