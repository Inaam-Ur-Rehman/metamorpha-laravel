@extends("layouts.default")
@props(["page"])
@section('main')
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
@endsection
