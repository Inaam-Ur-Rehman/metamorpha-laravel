@extends('layouts.default')

@section('main')
    <div class="px-4 mx-auto max-w-8xl">
        <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
    </div>
@endsection
