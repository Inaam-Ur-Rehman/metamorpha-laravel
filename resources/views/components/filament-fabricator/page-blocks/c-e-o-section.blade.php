@aware(['page'])
@props(['title','name','company','content','image','more_content'])
<div class="bg-theme-blue !px-0 my-12 py-4 lg:py-0" x-data="{more:false}" x-cloak="true">
    <div class="grid grid-cols-1 lg:grid-cols-5 max-w-8xl mx-auto" >
        <div class="col-span-3 p-4 space-y-6" >
            <div class="text-xl !font-vpc900 text-white">
                <h4>{{$name}}</h4>
                <h5>{{$company}}</h5>
            </div>
            <h2
                class="!font-vp600 text-3xl md:text-4xl text-theme-yellow uppercase text-center"
            >
                {{$title}}
            </h2>
            <div class="text-white text-xl !font-vp300 prose-base">
                {!! $content !!}
            </div>

            <button x-show="!more" class="text-white !font-vp700 flex items-center gap-4 justify-center mx-auto"
            @click="more = true"
            >
                MEER
                <x-heroicon-s-chevron-down class="inline-block w-6 h-6" />
            </button>


        </div>
        <div class="order-first col-span-2 lg:order-none">
            <img
                src="{{Storage::url($image)}}"
                alt="Wouter Torfs"
                class="object-cover w-full h-full max-w-[400px] lg:max-w-none mx-auto"
            />
        </div>
    </div>

    <section x-show="more" class="p-4 space-y-4 max-w-8xl mx-auto">
        <div class="text-white text-xl !font-vp300 prose-base">
{!! html_entity_decode($more_content) !!}
        </div>
        <button x-show="more" class="text-white !font-vp700 flex items-center gap-4 justify-center mx-auto uppercase"
                @click="more = false"
        >
            verbergen
            <x-heroicon-s-chevron-up class="inline-block w-6 h-6" />
        </button>

    </section>
</div>
