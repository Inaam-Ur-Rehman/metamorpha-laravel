@aware(['page'])

@props(['image', 'name', 'role', 'testimonial'])
<div
    class="bg-white rounded-md md:rounded-bl-[6rem] md:rounded-tr-[6rem] relative z-[9999] min-h-52 m-2 my-32 block px-4">
    <img src="{{ Storage::url($image) }}" alt="{{ $name }}"
        class="absolute w-44 transform -translate-x-1/2 aspect-square -top-[15%] md:-top-[20%] left-1/2" />
    <div class="px-2 py-24 text-center md:px-16">
        <div class="my-6">
            <strong>{{ $name }}</strong>
            <p>{{ $role }}</p>
        </div>
        <p class="text-xl">
            {{ $testimonial }}
        </p>
    </div>
</div>
