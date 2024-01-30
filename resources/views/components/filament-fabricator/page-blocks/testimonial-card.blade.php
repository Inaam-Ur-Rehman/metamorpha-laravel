@aware(['page'])

@props([
    'image', 'name', 'role', 'testimonial'
])
<div
    class="bg-white rounded-bl-[6rem] rounded-tr-[6rem] relative z-[9999] min-h-52 m-2 my-24 block px-4"
>
    <img
        src="{{Storage::url($image)}}"
        alt="{{$name}}"
        class="absolute w-44 transform -translate-x-1/2 aspect-square -top-[15%] md:-top-[20%] left-1/2"
    />
    <div class="px-16 py-24 text-center">
        <div class="my-6">
            <strong>{{$name}}</strong>
            <p>{{$role}}</p>
        </div>
        <p class="text-xl">
            {{$testimonial}}
        </p>
    </div>
</div>
