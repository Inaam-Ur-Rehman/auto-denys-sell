<div class="max-w-3xl mx-auto my-8">
    <h4 class="my-8 text-2xl font-bold text-center text-theme-red">Uw contact gegevens</h4>

    <form wire:submit.prevent='save' class="flex flex-col gap-4">
        <div class="grid grid-cols-1 gap-8 text-white md:grid-cols-2">
            <label for="name">Voornaam <span class="text-xs text-theme-red">*</span>
                <input type="text" name="name" id="name" wire:model="name"
                    class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
            </label>
            {{-- telepghone --}}
            <label for="telephone">Telefoon <span class="text-xs text-theme-red">*</span>
                <input type="text" name="telephone" id="telephone" wire:model="telephone"
                    class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
            </label>
        </div>
        <div class="grid grid-cols-1 gap-8 text-white md:grid-cols-2">
            {{-- email --}}
            <label for="email">Email <span class="text-xs text-theme-red">*</span>
                <input type="text" name="email" id="email" wire:model="email"
                    class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
            </label>
            {{-- postal code --}}
            <label for="postal_code">Postcode/Gemeente <span class="text-xs text-theme-red">*</span>
                <input type="text" name="postal_code" id="postal_code" wire:model="postal_code"
                    class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
            </label>
        </div>
        <h5 class="my-2 text-2xl font-bold text-center text-theme-red">Uw bericht</h5>
        <textarea name="message" id="message" cols="30" rows="10" wire:model="message"
            class="block w-full px-4 py-2 bg-transparent border-[1px] rounded-md text-white"></textarea>
        <button type="submit"
            class="px-8 py-2 mx-auto mt-6 text-white rounded-md bg-theme-red max-w-max">VERSTUREN</button>

        @if ($errors->any())
            <div class="flex flex-col gap-4">
                @foreach ($errors->all() as $error)
                    <p class="text-red-600">{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </form>
</div>
