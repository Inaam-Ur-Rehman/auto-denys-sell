<div class="bg-[#1E1E1E] py-8">
    <div class="max-w-3xl p-6 mx-auto bg-white rounded-2xl">
        <h2 class="text-3xl font-bold text-center text-theme-red">Gratis waardebepaling in enkele stappen.</h2>
        <p class="my-2 text-xl text-center">Zorgeloos de beste prijs.</p>
        <form wire:submit.prevent='save' class="flex flex-col gap-y-6">
            <h3 class="my-4 text-xl font-bold text-theme-red">Gegevens auto</h3>
            <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
                <label class="font-bold" for="brand">Merk <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="brand" id="brand" wire:model="brand"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
                {{-- model --}}
                <label class="font-bold" for="model">Model <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="model" id="model" wire:model="model"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
            </div>
            <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
                {{-- year --}}
                <label class="font-bold" for="year">Bouwjaar <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="year" id="year" wire:model="year"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
                {{-- brandstof --}}
                <label class="font-bold" for="fuel">Brandstof <span class="text-xs text-theme-red">*</span>
                    {{-- select tag --}}
                    <select name="fuel" id="fuel" wire:model="fuel"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md">
                        <option value="benzine">Benzine</option>
                        <option value="diesel">Diesel</option>
                        <option value="elektrisch">Elektrisch</option>
                        <option value="hybride">Hybride</option>
                        <option value="other">Other</option>
                    </select>
                </label>
            </div>
            {{-- transmission and mileage --}}
            <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
                <label class="font-bold" for="transmission">
                    Transmisse <span class="text-xs text-theme-red">*</span>
                    <select name="transmission" id="transmission" wire:model="transmission"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md">
                        <option value="manual">Manueel</option>
                        <option value="automatic">Automatisch</option>
                    </select>
                </label>

                <label class="font-bold" for="mileage">Kilometerstand <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="mileage" id="mileage" wire:model="mileage"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
            </div>
            {{-- Beschikbaarheid wagen*
            Verwachte prijs* --}}
            <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
                <label class="font-bold" for="availability">Beschikbaarheid wagen <span
                        class="text-xs text-theme-red">*</span>
                    <input type="text" name="availability" id="availability" wire:model="availability"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
                <label class="font-bold" for="price">Verwachte prijs <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="price" id="price" wire:model="price"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
            </div>
            {{-- textare for extra info --}}
            <label class="font-bold" for="extra_info">Extra informatie
                <textarea name="extra_info" id="extra_info" cols="30" rows="5" wire:model="extra_info"
                    class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md"></textarea>
            </label>
            {{-- // phots and show in grid view dynamic --}}
            <h3 class="text-xl font-bold text-theme-red">
                Foto's
            </h3>
            <label class="font-bold" for="photos">
                <span class=" !bg-theme-red text-white px-4 py-2 rounded-md">
                    Choose files
                </span>
                {{-- style file input like red button, hide default style  --}}
                <input type="file" multiple name="photos" id="photos" wire:model="photos"
                    class="hidden w-[20px] px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                {{-- show photos in grid view --}}
            </label>
            <div class="flex flex-col gap-4">
                <div class="flex flex-wrap gap-4">
                    {{-- show images with a cross button and on click on cross delete that specific image --}}
                    @foreach ($photos as $photo)
                        <div
                            class="relative flex flex-col justify-between h-full border-2 border-white rounded-lg shrink-0">
                            <img src="{{ $photo->temporaryUrl() }}" alt="logo"
                                class="mx-auto w-44 aspect-video " />
                            <button wire:click="removePhoto({{ $loop->index }})"
                                class="absolute flex items-center justify-center w-4 h-4 text-2xl bg-white rounded-full top-1 right-1 text-theme-red">
                                &times;
                            </button>
                        </div>
                    @endforeach


                </div>
            </div>
            {{-- // contact info --}}
            <h3 class="text-xl font-bold text-theme-red">
                Foto's
            </h3>
            <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
                <label class="font-bold" for="name">Voornaam <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="name" id="name" wire:model="name"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
                {{-- email --}}
                <label class="font-bold" for="email">E-mailadres <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="email" id="email" wire:model="email"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
            </div>
            {{-- telephoen, postal code --}}
            <div class="grid items-center grid-cols-1 gap-8 md:grid-cols-2">
                <label class="font-bold" for="telephone">Telefoon <span class="text-xs text-theme-red">*</span>
                    <input type="text" name="telephone" id="telephone" wire:model="telephone"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
                {{-- postal code --}}
                <label class="font-bold" for="postal_code">Postcode/Gemeente <span
                        class="text-xs text-theme-red">*</span>
                    <input type="text" name="postal_code" id="postal_code" wire:model="postal_code"
                        class="block w-full px-4 py-2 mt-2 bg-transparent border-[1px] rounded-md" />
                </label>
            </div>
            <button type="submit" class="px-8 py-2 mx-auto mt-6 text-white rounded-md bg-theme-red max-w-max">UW AUTO
                AANBIEDEN</button>

            {{-- if errors show here --}}

            @if ($errors->any())
                <div class="p-4 rounded-md bg-red-50">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.28 7.22a.75.75 0 00-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 101.06 1.06L10 11.06l1.72 1.72a.75.75 0 101.06-1.06L11.06 10l1.72-1.72a.75.75 0 00-1.06-1.06L10 8.94 8.28 7.22z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-sm font-medium text-red-800">There were {{ $errors->count() }} errors with
                                your submission</h3>
                            <div class="mt-2 text-sm text-red-700">
                                <ul class="pl-5 space-y-1 list-disc">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif


        </form>
    </div>
    <h2 class="mt-6 text-4xl font-bold text-center text-theme-red ">
        Toch liever wat persoonlijker?
    </h2>
    <p class="text-xl text-center text-white max-w-[500px] mx-auto my-2">
        Geen probleem. Eén van onze medewerkers helpt je graag verder bij het verkopen van uw auto.
    </p>
    <a href={{ route('overons') }}
        class="block px-8 py-2 mx-auto mt-6 text-white rounded-md bg-theme-red max-w-max">NEEM CONTACT
        MET
        ONS OP</a>

</div>
