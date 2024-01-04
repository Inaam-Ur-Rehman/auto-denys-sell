<footer class="text-white py-8 px-4">
    <div
        class="max-w-screen-theme-screen mx-auto grid grid-cols-1 md:grid-cols-3 items-center gap-4 justify-items-center ">
        <div class="flex gap-6">
            <a href="/">Over ons</a>
            <a href="/contact">Contact</a>
            <a href="/">FAQ</a>
        </div>
        <div class="flex md:flex-col gap-4">
            <div class="flex items-center gap-2">
                <x-heroicon-o-envelope class="w-8 h-8 border-2 p-1 rounded-md" />
                <a href="tel:0491121227">0491 12 12 27</a>
            </div>
            <div class="flex items-center gap-2">
                <x-heroicon-o-phone class="w-8 h-8 border-2 p-1 rounded-md" />
                <a href="tel:0491121227">0491 12 12 27</a>
            </div>
        </div>
        <div class="flex items-center gap-6 justify-center">
            <a href="/"><img src="{{ asset('images/Instagram.svg') }}" alt="logo" class="w-8 h-8 " /></a>
            <a href="/"><img src="{{ asset('images/linkedIn.svg') }}" alt="logo" class="w-8 h-8 " /></a>
            <a href="/"><img src="{{ asset('images/facebook.svg') }}" alt="logo" class="w-8 h-8 " /></a>
        </div>
    </div>
</footer>
