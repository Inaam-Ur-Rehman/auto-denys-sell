@extends('layouts.main')
@section('content')
    <div>
        {{-- hero --}}
        <div style="background:url('{{ asset('over.png') }}')"
            class="relative items-center w-full h-full px-4 text-white !bg-cover !bg-center !bg-no-repeat md:px-24 drop-shadow-lg">
            <div class="grid grid-cols-1 py-8 mx-auto md:grid-cols-2 max-w-screen-theme-screen">
                <div class="z-40 flex flex-col gap-4 pt-32 pb-8 md:pb-24 text-center md:text-left max-w-[600px]">
                    <h1 class="text-2xl font-bold text-theme-red md:text-4xl">Verkoop uw auto, bestelwagen of Over Verkoop
                        Slim Uw Auto.
                    </h1>
                    <p class="text-lg md:text-xl max-w-[80%] font-light pb-4 mx-auto md:mx-0">
                        Verkoop Slim Uw Auto is sedert beginjaren 2000 actief in de aankoop van tweedehandswagen.
                    </p>
                </div>
                <div></div>
            </div>
        </div>
        {{-- two cols features --}}
        <div class="px-4 mx-auto my-16 text-xl max-w-screen-theme-screen">
            <div class="grid grid-cols-1 gap-8 text-left md:grid-cols-2 md:justify-items-center">
                <div>
                    <h2 class="text-2xl font-bold text-theme-red">Dit zijn uw zekerheden.</h2>
                    <ul class="text-white list-disc list-inside">
                        <li>Gratis en vrijblijvende waardebepaling</li>
                        <li>Eerlijke en correcte prijs</li>
                        <li>Instant betaling met overschrijving of cash</li>
                        <li>Eigen gratis transportdienst</li>
                        <li>Supersnelle service (binnen de 24u)</li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-theme-red">Dit zijn uw voordelen.</h2>
                    <ul class="text-white list-disc list-inside">
                        <li>Geen urenlange zoekertjes plaatsen</li>
                        <li>Geen ongewenste kopers</li>
                        <li>Geen tussenpersonen</li>
                        <li>Ongeacht kilometerstand</li>
                        <li>Ook met verlopen keuring</li>
                    </ul>
                </div>
            </div>
            <div></div>
        </div>
        {{-- three cols boxes  --}}
        <div
            class="grid grid-cols-1 px-4 mx-auto my-32 md:px-24 gap-y-24 gap-x-24 md:grid-cols-2 xl:grid-cols-3 max-w-screen-theme-screen place-items-center">
            <x-option-card number="01" logo="{{ asset('/images/registration.svg') }}"
                title="Gratis en vrijblijvende waardebepaling"
                description="Meld uw voertuig snel en eenvoudig aan door een paar vragen te beantwoorden. Voeg ook recente foto's van uw voertuig toe en één van onze medewerkers neemt doorgaans binnen enkele uren contact met u op." />
            <x-option-card number="02" logo="{{ asset('/images/file.svg') }}"
                title="Gratis en vrijblijvende waardebepaling"
                description="Gaat u akkoord met het bod? Dan maken we een afspraak voor een controle van het voertuig ter plaatse. Eén van onze medewerkers komt langs voor een visuele en technische controle van de staat van het voertuig en een testrit." />
            <x-option-card number="03" logo="{{ asset('/images/car.svg') }}"
                title="Gratis en vrijblijvende waardebepaling"
                description="Als alles in orde is wordt een verkoopovereenkomst opgesteld, de betaling wordt naar wens ofwel instant uitgevoerd via overschrijving of cash betaald. Onze eigen ophaaldienst haalt de wagen daarna op." />
        </div>
        {{-- form  --}}
        @livewire('contact-form')
    </div>
@endsection
