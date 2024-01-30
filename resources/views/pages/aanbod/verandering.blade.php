@extends("layouts.default")
@section("main")
    <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
@endsection
