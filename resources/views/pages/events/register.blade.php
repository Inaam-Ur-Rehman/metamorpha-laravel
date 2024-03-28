@extends('layouts.default')

@section('main')
    <div class="max-w-6xl mx-auto px-4 my-6">
        <h1 class="uppercase text-4xl md:text-5xl lg:text-6xl decoration !font-vpc900 max-w-max my-8">
            BOEK dit EVENement
        </h1>
        @livewire('event-form',['event'=>$event])
    </div>
@endsection
