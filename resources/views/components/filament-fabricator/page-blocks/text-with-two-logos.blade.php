@aware(['page'])
@props(['title', 'description','logo1','logo2'])
<div class="px-4 py-4 md:py-8">
    <div class="max-w-8xl mx-auto grid gap-8 grid-cols-1 md:grid-cols-2">
        <div class="flex flex-col items-start gap-6">
            <h3 class="!font-vpc700 uppercase text-xl md: text-theme-blue">
                {{$title}}
            </h3>
            <div>
                {!! $description !!}
            </div>
        </div>
        <div class="grid justify-items-center gap-8 md:justify-items-start grid-cols-1 md:grid-cols-2 items-center">
            <img  src="{{Storage::url($logo1)}}" alt="Metamorpha" />
            <img  src="{{Storage::url($logo2)}}" alt="Metamorpha" />
        </div>
    </div>
</div>
