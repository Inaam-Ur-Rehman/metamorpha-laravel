@aware(['page'])
@props(['title', 'description','logo1','logo2'])
<div class="px-4 py-4 md:py-8">
    <div class="grid grid-cols-1 gap-8 mx-auto max-w-8xl md:grid-cols-2">
        <div class="flex flex-col items-start gap-6">
            <h3 class="!font-vpc600 uppercase text-2xl md:text-3xl text-theme-blue font-bold">
                {{$title}}
            </h3>
            <div>
                {!! $description !!}
            </div>
        </div>
        <div class="grid items-center grid-cols-1 gap-8 justify-items-center md:justify-items-start md:grid-cols-2">
            <img  src="{{Storage::url($logo1)}}" alt="Metamorpha" />
            <img  src="{{Storage::url($logo2)}}" alt="Metamorpha" />
        </div>
    </div>
</div>
