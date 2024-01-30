@aware(['page'])
@props(['heading', 'image', 'content','buttons'])
<div class="container px-4 mx-auto my-12">
    <div class="grid w-full grid-cols-1 lg:grid-cols-2">
        <div class="">
            <img src="{{Storage::url($image)}}" alt="{{$heading}}" class="w-full h-full" />
        </div>
        <div class="flex flex-col text-white bg-theme-blue">
            <div class="flex flex-col h-full gap-6 px-6 py-4 justify-evenly">
                <h2 class="font-vpc900 text-[#7FE0FA] text-3xl lg:text-5xl text-center">
                   {{$heading}}
                </h2>
                <div class="text-xl font-v400 prose-base prose-strong:text-theme-yellow">
                    {!! $content !!}
                </div>
                <div class="flex flex-row flex-wrap items-center justify-center gap-4">
                    <div class="">
                        <x-button
                            :href="$buttons[0]['link']"
                            :color="$buttons[0]['type']"
                            :icon="$buttons[0]['icon']"
                            :label="$buttons[0]['label'] == 'Download de gebruiksaanwijzing' ? 'Download' : $buttons[0]['label']"
                            :class="$buttons[0]['type'] === 'primary' ? 'border-2 lg:!hidden' : ''"
                        />
                        <x-button
                            :href="$buttons[0]['link']"
                            :color="$buttons[0]['type']"
                            :icon="$buttons[0]['icon']"
                            :label="$buttons[0]['label']"
                            :class="$buttons[0]['type'] === 'primary' ? '!hidden lg:!flex border-2' : ''"
                        />
                    </div>
                    <x-button
                        :href="$buttons[1]['link']"
                        :color="$buttons[1]['type']"
                        :icon="$buttons[1]['icon']"
                        :label="$buttons[1]['label']"
                        :class="$buttons[1]['type'] === 'primary' ? 'border-2' : ''"
                    />
{{--                        <LogoBtn--}}
{{--                            btnText="Download"--}}
{{--                            href="/download-form"--}}
{{--                            icon="system-uicons:download"--}}
{{--                            color="default"--}}
{{--                            classes="lg:hidden border-2"--}}
{{--                        />--}}
{{--                        <LogoBtn--}}
{{--                            btnText="Download de gebruiksaanwijzing"--}}
{{--                            href="/download-form"--}}
{{--                            icon="system-uicons:download"--}}
{{--                            color="default"--}}
{{--                            classes="hidden lg:flex border-2"--}}
{{--                        />--}}
{{--                    </div>--}}
{{--                    <LogoBtn--}}
{{--                        btnText="BESTEL NU"--}}
{{--                        href="/"--}}
{{--                        icon="bitcoin-icons:cart-outline"--}}
{{--                        color="invert"--}}
{{--                        classes=""--}}
{{--                    />--}}
                </div>
            </div>
        </div>
    </div>
</div>
