@extends('layouts.default')
<style>
    .content h2:first-child {
        margin-inline: auto !important;
    }
</style>
@section('main')
<div class="py-6 mx-auto max-w-8xl">
   <div class="content">
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
   </div>
   <div class="text-center mt-8 mb-8 md:mb-12 lg:mb-16">
    <h2 class="text-2xl md:text-3xl text-theme-blue font-bold uppercase !font-vpc600">Stuur een bericht...</h2>
    <p class="text-xl mt-4">Heb je een vraag of ontvang je graag meer informatie?</p>
   </div>
   @livewire('message-form')
</div>
@endsection
