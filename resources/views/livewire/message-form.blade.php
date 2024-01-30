<div>
    <form wire:submit.prevent="save" class="flex flex-col max-w-3xl gap-6 px-4 mx-auto mt-8 !font-vp600 text-xl">
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label for="voornaam" class="block mb-2">
                    Voornaam
                    <span class="text-red-600">*</span>
                </label>
                <input type="text" name="voornaam" id="voornaam" wire:model="first_name"
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
                <input type="text" name="familienaam" id="familienaam" wire:model="last_name"
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                @error('last_name')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
            <div>
                <label for="email" class="block mb-2">
                    Email
                    <span class="text-red-600">*</span>
                </label>
                <input type="email" name="email" id="email" wire:model="email"
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                @error('email')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="telefoon" class="block mb-2">
                    Telefoon

                </label>
                <input type="text" name="telefoon" id="telefoon" wire:model="phone"
                    class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
                @error('phone')
                    <span class="text-xs text-red-600">{{ $message }}</span>
                @enderror

            </div>
        </div>
        <div>
            <label for="onderneming" class="block mb-2">
                Naam onderneming (indien van toepassing)
                <span class="text-red-600">*</span>
            </label>
            <input type="text" name="onderneming" id="onderneming" wire:model="company"
                class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
            @error('company')
                <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="bericht" class="block mb-2">
                Bericht
                <span class="text-red-600">*</span>
            </label>
            <textarea name="bericht" id="bericht" wire:model="message"
                class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue"></textarea>
            @error('message')
                <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <!-- ikben as input text -->
        <div>
            <label for="ikben" class="block mb-2">
                Ik ben
                <span class="text-red-600">*</span>
            </label>
            <input type="text" name="ikben" id="ikben" wire:model="title"
                class="w-full p-2 text-black bg-white border-2 rounded-md border-theme-blue" />
            @error('title')
                <span class="text-xs text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <!-- checkbox -->
        <div class="flex items-center">
            <input type="checkbox" name="checkbox" id="checkbox" wire:model="newsletter"
                class="w-4 h-4 mr-2 border-2 rounded-md text-theme-blue border-theme-blue" />
            <label for="checkbox" class="text-xl !font-vp600">
                Schrijf me in voor de nieuwsbrief
            </label>
        </div>
        <!-- submit button -->
        <div class="flex justify-center">
            <button type="submit"
                class="px-2 py-2 text-xl bg-white !font-vp600 my-6 text-theme-blue rounded-full  flex items-center gap-2 mx-auto hover:scale-105 border-2 border-theme-blue">
                VERZENDEN
                <span class="flex items-center justify-center w-8 h-8 rounded-full bg-theme-blue">
                    <i class="text-white fa-solid fa-arrow-up"></i>
                </span>
            </button>
        </div>
        @if (session('message'))
            <p class="text-xl text-green-600">{{ session('message') }}</p>
        @endif
    </form>
</div>
