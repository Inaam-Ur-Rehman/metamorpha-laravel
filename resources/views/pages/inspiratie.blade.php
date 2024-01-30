@extends('layouts.default')

@section('main')
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    @foreach ($papers as $paper)
        <div class="px-4 py-8 my-12 bg-theme-blue">
            <div class="grid max-w-6xl grid-cols-1 gap-6 px-4 mx-auto md:grid-cols-2">
                <img src="{{ Storage::url($paper->image) }}" alt="{{ $paper->title }}" class="object-cover w-full" />
                <div class="text-white">
                    <div class="flex flex-col gap-4">
                        <h2 class="text-2xl md:text-3xl !font-vpc700 uppercase text-theme-yellow">
                            {{ $paper->title }}
                        </h2>
                        <p>
                            {{ $paper->desc }}
                        </p>
                    </div>
                    <x-button class="mt-12 border-2" icon="fas fa-heart" href="/inspiratie/download-form/{{ $paper->slug }}"
                        target="_blank" rel="noopener noreferrer" color="primary" label="DOWNLOAD" />
                </div>
            </div>
        </div>
    @endforeach
@endsection
