@aware(['page'])
@props([
    'title',
    'subtitle',
    'text',
    'link',
    'image'
])
<div class="py-8 my-12 bg-theme-blue px-4">
    <div class="grid max-w-6xl grid-cols-1 gap-6 px-4 mx-auto md:grid-cols-2">
        <img src="{{Storage::url($image)}}" alt="{{$title}}" class="object-cover w-full" />
        <div class="text-white">
            <div class="flex flex-col gap-4">
                <h2
                    class="text-2xl md:text-3xl !font-vpc700 uppercase text-theme-yellow"
                >
                    {{ $title }}
                </h2>
                <p>
                    {{ $text }}
                </p>
            </div>
{{--            <LogoBtn--}}
{{--                classes=" mt-12 border-2"--}}
{{--                href="/download-form"--}}
{{--                btnText="DOWNLOAD"--}}
{{--                icon="bxs:download"--}}
{{--                color="default"--}}
{{--            />--}}
            <x-button
                class="mt-12 border-2"
                icon="fas fa-heart"
                href="{{ $link }}"
                target="_blank"
                rel="noopener noreferrer"
                color="primary"
                label="DOWNLOAD"
            />
        </div>
    </div>
</div>
