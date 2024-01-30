@props([
    'card'
])
<div
    class="max-w-[350px] !font-vp300 text-base h-full flex flex-col justify-between gap-4 hover:scale-[101%] duration-75 cursor-pointer border-none outline-none focus:outline-none card bg-theme-blue"
>
    <img src="{{Storage::url($card['image'])}}" alt="{{$card['heading']}}" class="w-full" />
    <div class="flex flex-col gap-2 px-4 pb-4 text-center">
        <h2 class="text-xl font-bold text-theme-yellow !font-v700 uppercase">
            {{$card['heading']}}
        </h2>
        <p class="text-white">{{$card['content']}}</p>
        <x-button
            label="{{$card['btnLabel']}}"
            color="secondary"
            href="{{$card['btnLink']}}"
            class="block mx-auto my-2"
            icon="{{$card['btnIcon']}}"
        />
    </div>
</div>
