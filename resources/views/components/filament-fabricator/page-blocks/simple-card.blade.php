@aware(['page'])
@props([
//    'heading','content',
//    'btnText','btnLink',
//    'image', 'btnIcon'
'cards'
])
<div
    class="grid !max-w-6xl grid-cols-1 gap-8 mx-auto my-16 md:grid-cols-3 place-items-center px-4"
>
    @foreach($cards as $card)
        <x-card :card="$card"/>
    @endforeach
</div>
