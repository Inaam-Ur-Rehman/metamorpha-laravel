@aware(['page'])
@props(['title','subtitle','second_title','content','books'])
<div
    class="grid gap-6 px-4 mx-auto my-16 grid-cols1 lg:grid-cols-2 max-w-8xl"
>
    <div class="grid grid-cols-1 gap-12 p-4 bg-theme-blue sm:grid-cols-2">
        @foreach($books as $book)
            <x-book-card
                image="{{$book['image']}}"
                title="{{$book['title']}}"
                btnText="BESTEL NU"
                href="{{$book['link']}}"
                icon="fa fa-book"
            />
        @endforeach
    </div>
    <div>
        <div>
            <h2
                class="relative max-w-max mx-auto text-3xl uppercase !font-vpc900 md:text-4xl text-center"
            >
                {{ $title }}
                <span
                    class="absolute left-0 w-full h-3 -z-10 bottom-2 bg-theme-yellow"
                ></span>
            </h2>
            <h3
                class="relative max-w-max mx-auto text-3xl uppercase !font-vpc900 2xl:text-4xl text-center"
            >
                {{ $subtitle }}
                <span
                    class="absolute left-0 w-full h-3 -z-10 bottom-2 md:bg-theme-yellow"
                ></span>
            </h3>
        </div>
        <div class="flex flex-col gap-4">
            <h2 class="my-8 text-3xl font-vp600 md:text-4xl">INHOUD</h2>
            <h3 class="font-bold uppercase !fontvp-600">
                Woord vooraf door Wouter Torfs
            </h3>
            <ul class="flex flex-col gap-2">
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 1. </strong>
                    Mijn inspiratie
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 2. </strong>
                    De focus van ons innerlijke oog
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 3. </strong>
                    Groei-mindset of statische mindset?
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 4. </strong>
                    Theory X of Theory Y?
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 5. </strong>
                    De innerlijke criticus
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 6. </strong>
                    Talenten en potentieel
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 7. </strong>
                    Verbinding
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 8. </strong>
                    Iedereen coach?!
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 9. </strong>
                    Van individueel naar collectief: bedrijfscultuur
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 10. </strong>
                    (Zelf)leiderschap
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 11. </strong>
                    Het perspectief van de coach
                </li>
                <li class="!font-vp400 uppercase">
                    <strong class="!font-vp600">Hoofdstuk 12. </strong>
                    Terugblik
                </li>
            </ul>
        </div>
    </div>
</div>
