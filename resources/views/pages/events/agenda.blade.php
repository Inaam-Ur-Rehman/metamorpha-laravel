@extends('layouts.default')

@section('main')
    <div class="max-w-8xl mx-auto my-4 px-4">
    <h1 class="text-6xl !font-vpc900 decoration max-w-max my-8">
        EVENEMENTEN
    </h1>
        <div class="flex flex-col gap-8">
            @foreach($events as $event)
                <div class="py-4">
                    <div class="flex items-center py-4">
                        <p class="capitalize font-bold min-w-[100px]">
                            {{Jenssegers\Date\Date::parse($event->startDate)->format('F, Y')}}
                        </p>
                        <span class="w-full border-b-2 h-1 border-theme-black"></span>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-12 md:items-center gap-8">
                        <p class="lg:col-span-2 capitalize flex flex-col gap-2 self-start">
                       <span class="font-vpc900 text-3xl">
                            {{Jenssegers\Date\Date::parse($event->startDate)->format('d')}}
                       </span>
                            <span>
                             {{Jenssegers\Date\Date::parse($event->startDate)->format('l')}}
                            </span>
                        </p>
                        <div class="lg:col-span-5 flex flex-col gap-2">
                            <p class="capitalize italic">
                                {{Jenssegers\Date\Date::parse($event->startDate)->format('d')}}-
                                {{Jenssegers\Date\Date::parse($event->endDate)->format('d F, Y')}}
                            </p>
                            <h2 class="!font-vpc600 text-2xl uppercase max-w-md">
                                {{$event->title}}
                            </h2>
                            <p class="!font-v700">
                                {{$event->subTitle}}
                            </p>
                            <p>
                                {{$event->excerpt}}
                            </p>
                            <div
                                class="flex flex-col gap-4 my-4 md:gap-8 md:flex-row md:items-center"
                            >
                                <x-button
                                    label="LEES MEER"
                                    icon="fa fa-ellipsis-h"
                                    class="uppercase  "
                                    color="primary"
                                    href="{{route('events.show',$event->slug)}}"
                                />
                                <x-button
                                    label="SCHRIJF NU IN"
                                    icon="fa fa-user-plus"
                                    class="uppercase "
                                    color="primary"
                                    href="{{route('events.register',$event->slug)}}"
                                />
                            </div>

                        </div>
                        <div class="lg:col-span-1"></div>
                        <div class="lg:col-span-4 w-full">
                            <img src="{{Storage::url($event->thumbnail)}}" alt="{{$event->title}}" class="w-full"/>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
