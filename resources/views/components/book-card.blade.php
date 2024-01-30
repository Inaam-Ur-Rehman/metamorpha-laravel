@props(['image','title','btnText','href','icon'])
<div class="flex flex-col gap-4 mx-auto text-center text-white">
    <img src="{{Storage::url($image)}}" alt="{{$title}}" />
    <h2 class="!font-vp600 max-w-[180px] mx-auto text-center">{{$title}}</h2>
    <x-button href="{{$href}}" class="!font-vp600" color="secondary" icon="fas fa-shopping-cart"
              label="{{$btnText}}" class="mx-auto"
    />
</div>
