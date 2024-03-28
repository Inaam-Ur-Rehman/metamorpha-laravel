
<div>
    <form
        wire:submit.prevent="save"
        method="POST"
        class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col gap-2">
            <div class="flex flex-col gap-2">
                <label for="title" class="font-bold">
                    Title envenement
                    <span class="text-red-500">*</span>
                </label>
                <input value="{{$event->title}}" type="text" id="title" name="title" wire:model="title" class="w-full p-2 border border-gray-300 rounded">
                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Datum evenement*--}}
            <div class="flex flex-col gap-2">
                <label for="date" class="font-bold">
                    Datum evenement
                    <span class="text-red-500">*</span>
                </label>
                <input type="date"
                       min="{{\Carbon\Carbon::parse($event->startDate)->format('Y-m-d')}}"
                       max="{{\Carbon\Carbon::parse($event->endDate)->format('Y-m-d')}}"
                       id="date" name="date" wire:model="date" class="w-full p-2 border border-gray-300 rounded">
                @error('date') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Voornaam*--}}
            <div class="flex flex-col gap-2">
                <label for="firstName" class="font-bold">
                    Voornaam
                    <span class="text-red-500">*</span>
                </label>
                <input type="text" id="firstName" name="firstName" wire:model="firstName" class="w-full p-2 border border-gray-300 rounded">
                @error('firstName') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Naam*--}}
            <div class="flex flex-col gap-2">
                <label for="lastName" class="font-bold">
                    Naam
                    <span class="text-red-500">*</span>
                </label>
                <input type="text" id="lastName" name="lastName" wire:model="lastName" class="w-full p-2 border border-gray-300 rounded">
                @error('lastName') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Straat & huisnummer*--}}
            <div class="flex flex-col gap-2">
                <label for="street" class="font-bold">
                    Straat & huisnummer
                    <span class="text-red-500">*</span>
                </label>
                <input type="text" id="street" name="street" wire:model="street" class="w-full p-2 border border-gray-300 rounded">
                @error('street') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Postcode & woonplaats*--}}
            <div class="flex flex-col gap-2">
                <label for="postalCode" class="font-bold">
                    Postcode & woonplaats
                    <span class="text-red-500">*</span>
                </label>
                <input type="text" id="postalCode" name="postalCode" wire:model="postalCode" class="w-full p-2 border border-gray-300 rounded">
                @error('postalCode') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Land*--}}
            <div class="flex flex-col gap-2">
                <label for="country" class="font-bold">
                    Land
                    <span class="text-red-500">*</span>
                </label>
                <input type="text" id="country" name="country" wire:model="country" class="w-full p-2 border border-gray-300 rounded">
                @error('country') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            E-mailadres*--}}
            <div class="flex flex-col gap-2">
                <label for="email" class="font-bold">
                    E-mailadres
                    <span class="text-red-500">*</span>
                </label>
                <input type="email" id="email" name="email" wire:model="email" class="w-full p-2 border border-gray-300 rounded">
                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="flex flex-col gap-2">
{{--            Telefoon- of GSM nummer*--}}
            <div class="flex flex-col gap-2">
                <label for="phone" class="font-bold">
                    Telefoon- of GSM nummer
                    <span class="text-red-500">*</span>
                </label>
                <input type="tel" id="phone" name="phone" wire:model="phone" class="w-full p-2 border border-gray-300 rounded">
                @error('phone') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="job" class="font-bold">
                    Wat is je huidige job?
                </label>
                <select id="job" name="job" wire:model="job" class="w-full p-2 border border-gray-300 rounded">
                    <option value="werknemer">Ik ben werknemer</option>
                    <option value="zelfstandig ondernemer">Ik ben zelfstandig ondernemer</option>
                    <option value="andere" selected>Andere</option>
                </select>
                @error('job') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Naam bedrijf (indien de factuur voor het bedrijf is)--}}
            <div class="flex flex-col gap-2">
                <label for="company" class="font-bold">
                    Naam bedrijf (indien de factuur voor het bedrijf is)
                </label>
                <input type="text" id="company" name="company" wire:model="company" class="w-full p-2 border border-gray-300 rounded">
                @error('company') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Facturatie adres (indien ander adres)--}}
            <div class="flex flex-col gap-2">
                <label for="billingAddress" class="font-bold">
                    Facturatie adres (indien ander adres)
                </label>
                <input type="text" id="billingAddress" name="billingAddress" wire:model="billingAddress" class="w-full p-2 border border-gray-300 rounded">
                @error('billingAddress') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            BTW-nummer (indien van toepassing)--}}
            <div class="flex flex-col gap-2">
                <label for="vatNumber" class="font-bold">
                    BTW-nummer (indien van toepassing)
                </label>
                <input type="text" id="vatNumber" name="vatNumber" wire:model="vatNumber" class="w-full p-2 border border-gray-300 rounded">
                @error('vatNumber') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
{{--            Checkbox: Ik maak gebruik van de KMO-Portefeuille--}}
            <div class="flex gap-2">
                <input type="checkbox" id="kmo" name="kmo" wire:model="kmo" class="border border-gray-300 rounded">
                <label for="kmo" >
                    Ik maak gebruik van de KMO-Portefeuille
                </label>
                @error('kmo') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
            <a href="/wettelijke-informatie" class="underline underline-offset-2 font-bold">
                Algemene Voorwaarden <span class="text-red-500">*</span>
            </a>
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-1">
                    <input type="checkbox" id="terms" name="terms" wire:model="terms" class="border border-gray-300 rounded">
                    <label for="terms" >
                        Ik heb de algemene voorwaarden gelezen en verklaar mij akkoord.
                    </label>
                </div>
                @error('terms') <span class="text-red-500">{{ $message }}</span> @enderror

            </div>
            <p>
                Klik op ’algemene’ voorwaarden (hierboven) om ze nog eens te raadplegen.
            </p>
            <a href="/wettelijke-informatie" class="underline underline-offset-2 font-bold">
                Privacybeleid <span class="text-red-500">*</span>
            </a>
            <div class="flex flex-col gap-2">
                <div class="flex items-center gap-1">
                <input type="checkbox" id="privacy" name="privacy" wire:model="privacy" class="border border-gray-300 rounded">
                <label for="privacy" >
                    Ik heb het privacybeleid gelezen en verklaar mij akkoord.
                </label>
                </div>
                @error('privacy') <span class="text-red-500">{{ $message }}</span> @enderror
            </div>
        </div>
        <button
            type="submit"
            class="col-span-full max-w-max mx-auto p-2 text-white bg-theme-blue rounded-full hover:bg-theme-dark-blue
            cursor-pointer hover:scale-105 transition-all duration-700 ease-in-out
            "
        >
            VERZENDEN
            <i class="fa-solid fa-envelope-circle-check bg-white text-theme-blue rounded-full p-1"></i>
        </button>
    </form>

</div>
