@aware(['page'])
@props(['cards'])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-8xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
            @foreach($cards as $card)
                <div
                    style="background-color: {{$card['color']}};"
                    class="flex flex-col justify-between">
                   <div>
                       <img
                           class="w-full aspect-video object-cover"
                           src="{{Storage::url($card['image'])}}"
                           alt="{{$card['title']}}"
                       />
                       <h2 class="font-vpc900 text-2xl md:text-3xl text-center my-4 relative custom px-4">
                           {{$card['title']}}
                           <span
                               class="absolute  custom"
                           ></span>
                       </h2>
                   </div>
                    <p class="text-center !font-vp400 text-lg md:text-xl px-4">
                        {{$card['content']}}
                    </p>
                    <x-button
                        class="my-4 mx-auto"
                        :href="$card['link']"
                        label="MEER INFORMATIE"
                        color="secondary"
                        icon="fa-solid fa-circle-info"
                    />

                </div>
            @endforeach
        </div>
    </div>
</div>
