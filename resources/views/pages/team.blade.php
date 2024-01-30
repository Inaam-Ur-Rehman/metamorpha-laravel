@extends("layouts.default")
@props(["page"])
@section('main')
    <div class="max-w-7xl mx-auto flex flex-col">
        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    </div>
@endsection
