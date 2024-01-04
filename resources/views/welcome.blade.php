@extends('layouts.main')

@section('content')
    <div class="text-white ">
        <x-hero />
    </div>
    <div>
        @livewire('sell-form')
    </div>
    <div class="relative items-center w-full h-full px-4 text-white !bg-center !bg-no-repeat !bg-cover  md:px-24"
        style="background-image: url('{{ asset('images/doen.png') }}')">
        <div class="grid grid-cols-1 py-8 mx-auto md:grid-cols-2 md:py-28 max-w-screen-theme-screen">
            <div class="flex flex-col self-center gap-4">
                <h2 class="text-4xl font-bold text-red-600">What we doen.</h2>
                <p>
                    Verkoop Slim Uw Auto is gespecialiseerd in de aankoop van alle merken.
                </p>
                <div class="flex flex-col justify-between gap-8 md:flex-row whitespace-nowrap">
                    <div>
                        <span class="font-bold">Wij kopen:​​</span>
                        <ul class="list-disc list-inside">
                            <li>Personenwagens</li>
                            <li>Bedrijfswagens</li>
                            <li>Luxewagens</li>
                            <li>Bestelwagens</li>
                            <li>Lichte vracht</li>
                            <li>Recente wagens</li>
                            <li>Wagens met veel kilometers</li>
                        </ul>
                    </div>
                    <div>
                        <ul class="list-disc list-inside">
                            <li>Terreinwagens</li>
                            <li>4 x 4</li>
                            <li>Pick-Ups</li>
                            <li>Cabrio's</li>
                            <li>Mobilhomes</li>
                            <li>Recente wagens</li>
                            <li>Schadewagens</li>
                            <li>Wagens met rode keuringskaart</li>
                        </ul>
                    </div>
                </div>
                <p>
                    Maakt niet uit welke brandstof, hoeveel kilometers en of de wagen al dan niet gekeurd is. Wagens met
                    gebruikssporen of lichte schade mogen ook steeds aangeboden worden. Wij bekijken samen met u de beste
                    prijs voor uw tweedehandswagen.
                </p>
                <a href="/"
                    class="px-4 py-2 text-white transition duration-200 ease-in-out bg-red-600 rounded-md hover:bg-red-700 max-w-max">
                    CONTACTEER ONS VANDAAG NOG
                </a>
            </div>
            <div></div>
        </div>
    </div>
    <div class="relative items-center w-full h-full px-4 text-white !bg-center !bg-no-repeat !bg-cover md:px-24"
        style="background-image: url('{{ asset('images/verkoop.png') }}')">
        >
        <div
            class="grid items-end content-end justify-end grid-cols-1 py-8 mx-auto text-right md:grid-cols-2 max-w-screen-theme-screen">
            <div></div>
            <div class="flex flex-col gap-4 ">
                <h2 class="text-4xl font-bold text-red-600">Verkoop Slim Uw Auto.</h2>
                <p>
                    Wij zijn een Belgisch autobedrijf en kopen alle auto's over gans Vlaanderen met een eigen ophaaldienst.
                    Of je nu in Limburg, Antwerpen, Vlaams Brabant, Oost-Vlaanderen of West-Vlaanderen woont, Verkoop Slim
                    Uw Auto bied steeds de beste prijs voor uw tweedehandswagen.
                </p>

                <p>
                    <span class="text-theme-red">Ons team is in elke provincie actief</span> zodat u nooit lang hoeft te
                    wachten voor een afspraak. Zo bent u
                    steeds zeker van een <span class="text-theme-red"> snelle taxatie </span> van uw tweedehandswagen.
                </p>
                <p>
                    Door onze jarenlange ervaring kunnen wij van Verkoop Slim Uw Auto <span class="text-theme-red"> steeds
                        de beste prijs </span> aanbieden voor
                    uw tweedehandswagen.
                </p>
                <p>
                    Mocht u nog geen vraagprijs weten voor uw wagen, kunnen wij u via ons <span class="text-theme-red">
                        online waardebepaling formulier </span> al
                    snel een richtprijs laten weten. Doorgaans binnen het uur krijgt u antwoord op uw aanvraag.
                </p>
                <p>
                    Wij werken snel, eenvoudig, en efficiënt. <span class="text-theme-red"> Wij betalen direct, en komen
                        bovendien de wagen zelf ophalen.</span>
                </p>
                <p>
                    Of je nu voorbij de<span class="text-theme-red"> Kempen </span>, of aan <span class="text-theme-red"> de
                        kust </span>, wij kopen auto's aan
                    over <span class="text-theme-red"> gans Vlaanderen </span>. Neem dus
                    gerust contact met ons op, of vul ons handig <span class="text-theme-red"> waardebepaling formulier
                    </span> in en wij beantwoorden graag uw
                    aanvraag.
                </p>
                <p>Onze medewerkers staan steeds <span class="text-theme-red"> vriendelijk en behulpzaam tot uw dienst
                    </span> en antwoorden al uw vragen over de
                    verkoop van uw wagen.</p>
                <a href="/"
                    class="px-4 py-2 ml-auto text-white transition duration-200 ease-in-out bg-red-600 rounded-md hover:bg-red-700 max-w-max">
                    VRAAG GRATIS EEN TAXATIE
                </a>
            </div>
        </div>
    </div>
    {{-- bg-[url('{{ asset('images/zijn.png') }}')] --}}

    <div class="relative items-center w-full h-full px-4 text-white !bg-center !bg-no-repeat !bg-cover  md:px-24"
        style="background-image: url('{{ asset('images/zijn.png') }}')">
        <div
            class="grid items-end content-end justify-end grid-cols-1 py-8 mx-auto text-left md:grid-cols-2 max-w-screen-theme-screen">
            <div class="flex flex-col gap-4 ">
                <h2 class="text-4xl font-bold text-red-600">Dit zijn uw zekerheden.</h2>
                <ul class="list-disc list-inside">
                    <li>Gratis en vrijblijvende waardebepaling</li>
                    <li>Eerlijke en correcte prijs</li>
                    <li>Instant betaling met overschrijving of cash</li>
                    <li>Eigen transportdienst</li>
                    <li>Supersnelle service (binnen de 24 uur)</li>
                </ul>
                <h3 class="font-bold">Het verkopen van uw voertuig werkt als volgt:
                    ​</h3>

                <h4 class="font-bold">Stap 1: Aanmelden</h4>
                <p>
                    Meld uw voertuig snel en eenvoudig aan door een paar vragen te beantwoorden. Voeg ook recente foto's toe
                    en één van onze medewerkers neemt doorgaans binnen enkele uren contact met u op.
                </p>
                <h4 class="font-bold">Stap 2: Resultaat
                </h4>
                <p>
                    Gaat u akkoord met het bod? Dan maken we een afspraak voor een controle van het voertuig ter plaatse.
                    Eén van onze medewerkers komt langs voor een visuele en technische controle van de staat van het
                    voertuig en een testrit.
                </p>
                <h4 class="font-bold">Stap 3: Verkopen
                </h4>
                <p>Als alles in orde is wordt een verkoopovereenkomst opgesteld, de betaling wordt naar wens ofwel instant
                    uitgevoerd via overschrijving of cash betaald. Onze eigen ophaaldienst haalt de wagen daarna op.</p>
                <a href="/"
                    class="px-4 py-2 mr-auto text-white transition duration-200 ease-in-out bg-red-600 rounded-md hover:bg-red-700 max-w-max">
                    VRAAG GRATIS EEN TAXATIE
                </a>
            </div>
            <div></div>
        </div>
    </div>
@endsection
