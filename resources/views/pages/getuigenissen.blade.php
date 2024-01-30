@extends('layouts.default')

@section('main')
    <div style="
            background-image: url({{ asset('bg-testi.png') }});
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        "
        class="
    !min-h-screen bg-cover bg-center bg-no-repeat">
        <div class="max-w-4xl mx-1 md:mx-8 slick lg:mx-auto ">
            <x-filament-fabricator::page-blocks :blocks="$page->blocks" />
        </div>
    </div>
@endsection
