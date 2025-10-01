<div class="px-4 my-16">
    <h1 class="text-3xl md:text-4xl !font-vp700 text-center my-12">
        Download “{{$title}}”
    </h1>
    <form class="max-w-3xl px-4 mx-auto !font-vp600 !font-bold flex flex-col gap-6 text-xl" wire:submit.prevent='save'>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
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
        <!-- email and Mobiel telefoonnummer* -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
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
                <label for="mobiel" class="block mb-2">
                    Mobiel telefoonnummer
                    <span class="text-red-600">*</span>
                </label>
                <input type="text" name="mobiel" id="mobiel" wire:model='phone'
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                @error('phone')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <!-- BEDRIJF* -->
        <div>
            <label for="bedrijf" class="block mb-2">
                Bedrijf
                <span class="text-red-600">*</span>
            </label>
            <input type="text" name="bedrijf" id="bedrijf" wire:model='company'
                class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
            @error('company')
                <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <!-- Schrijf me in voor de nieuwsbrief checkbox -->
        <div class="flex items-center gap-2">
            <input type="checkbox" name="nieuwsbrief" id="nieuwsbrief" class="w-5 h-5" wire:model='subscribed' />
            <label for="nieuwsbrief" class="text-xl">
                Schrijf me in voor de nieuwsbrief
            </label>
        </div>
        <!-- Submit button -->
        <div class="flex justify-center">
            <button type="submit"
                class="px-2 py-2 text-xl bg-white !font-vp600 my-6 text-theme-blue rounded-full  flex items-center gap-2 mx-auto hover:scale-105 border-2 border-theme-blue">
                VERZENDEN
                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-theme-blue">
                    <i class="text-white fas fa-download"></i>
                </span>
            </button>
        </div>
    </form>
</div>
