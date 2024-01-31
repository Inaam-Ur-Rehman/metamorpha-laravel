<div class="grid grid-cols-1 gap-16 px-4 mx-auto md:grid-cols-2 max-w-7xl" x-data="{ country: 'Belgium' }">
    <div>
        <h1 class="text-center text-theme-yellow !font-vpc900 text-xl md:text-4xl uppercase">Algemene informatie</h1>

        <div class="my-8 !font-vp600 text-xl text-white flex flex-col gap-6">
            <div class="grid grid-cols-2 gap-6 ">
                <div>
                    <label for="voornaam" class="block mb-2">
                        Voornaam
                        <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="voornaam" id="voornaam" wire:model='first_name'
                        class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />

                    @error('first_name')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="familienaam" class="block mb-2">
                        Familienaam
                        <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="familienaam" id="familienaam" wire:model='last_name'
                        class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                    @error('last_name')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div>
                <label for="email" class="block mb-2">
                    Email
                    <span class="text-red-600">*</span>
                </label>
                <input type="email" name="email" id="email" wire:model='email'
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                @error('email')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div>
                {{-- select menu country (land) to choose from belgium, netherlands, --}}
                <label for="land" class="block mb-2">
                    Land
                    <span class="text-red-600">*</span>
                </label>
                <select name="country" id="country" wire:model='country' wire:change='update'
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" x-model="country">
                    <option value="Belgium" selected>Belgium</option>
                    <option value="Netherland">Netherland</option>
                </select>

                @error('country')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
            {{-- street and housenumber --}}
            <div class="grid grid-cols-2 gap-6 ">
                <div>
                    <label for="straat" class="block mb-2">
                        Straat
                        <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="straat" id="straat" wire:model='street'
                        class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                    @error('street')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="huisnummer" class="block mb-2">
                        Huisnummer
                        <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="huisnummer" id="huisnummer" wire:model='house_number'
                        class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                    @error('house_number')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- postcode,city --}}
            <div class="grid grid-cols-2 gap-6 ">
                <div>
                    <label for="postcode" class="block mb-2">
                        Postcode
                        <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="postcode" id="postcode" wire:model='postal_code'
                        class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                    @error('postal_code')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="stad" class="block mb-2">
                        Stad
                        <span class="text-red-600">*</span>
                    </label>
                    <input type="text" name="stad" id="stad" wire:model='city'
                        class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                    @error('city')
                        <span class="text-xs text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            {{-- take fiull name  --}}
            <div>
                <label for="company_name" class="block mb-2">
                    Naam onderneming
                    <span class="text-red-600">*</span>
                </label>
                <input type="text" name="company_name" id="company_name" wire:model='company'
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                @error('company')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
            {{-- checkbox for terms --}}
            <div>
                <label for="terms" class="block mb-2">
                    <input type="checkbox" name="terms" id="terms" wire:model='terms' class="w-4 h-4" />
                    Ik ga akkoord met de aankoop, de door mij ingevoerde gegevens en ik accepteer de Algemene
                    Voorwaarden.
                    <span class="text-red-600">*</span>
                </label>
                @error('terms')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>

    </div>
    <div class="w-full md:max-w-md px-8 bg-white rounded-md h-max justify-self-end !font-v400">
        <h2 class="text-2xl md:text-4xl !font-vpc900 uppercase text-theme-blue text-center my-4">Winkelmandje</h2>
        <div class="flex items-center justify-between">
            <h3>Inspiratiekaarten</h3>
            <p>€ {{ $block['price'] }}.00</p>
        </div>
        <hr class="my-6" />
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-between">
                <h3 class="font-bold">Subtotal</h3>
                <p class="font-bold">€ {{ $block['price'] }}.00</p>
            </div>
            <div class="flex items-center justify-between">
                <h3>Shipping costs</h3>
                <p>€ 0.00</p>
            </div>
        </div>
        <hr class="my-6" />
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-between text-xl">
                <h3 class="font-bold">Total</h3>
                <p x-show="country=='Belgium'" class="font-bold">€
                    {{ $block['price'] }}.00
                </p>
                <p x-show="country=='Netherland'" class="font-bold">€
                    {{ $block['price'] + 4 }}.00
                </p>
            </div>
            <div class="flex items-center justify-between">
                <h3>Amount incl. 6% BTW en verzendkosten</h3>
                {{-- <p>6 %</p> --}}
            </div>
        </div>
        <button type="submit" wire:click.prevent='submit'
            class="px-2 py-2 bg-theme-blue !font-vp600 my-6 text-white rounded-full  flex items-center gap-2 mx-auto hover:scale-105 border-2 border-theme-blue">
            BESTEL NU
            <span class="flex items-center justify-center w-8 h-8 bg-white rounded-full">
                <i class="fas fa-shopping-cart text-theme-blue"></i>
            </span>
        </button>
    </div>
</div>
