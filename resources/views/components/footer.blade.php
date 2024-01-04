<footer class="px-4 py-8 text-white">
    <div
        class="grid items-center grid-cols-1 gap-4 mx-auto max-w-screen-theme-screen md:grid-cols-3 justify-items-center ">
        <div class="flex gap-6">
            <a href="/">Over ons</a>
            <a href="/contact">Contact</a>
            <a href="/">FAQ</a>
        </div>
        <div class="flex flex-col gap-4">
            <div class="flex items-center gap-2">
                <x-heroicon-o-envelope class="w-8 h-8 p-1 border-2 rounded-md" />
                <a href="tel:0491121227">0491 12 12 27</a>
            </div>
            <div class="flex items-center gap-2">
                <x-heroicon-o-phone class="w-8 h-8 p-1 border-2 rounded-md" />
                <a href="tel:0491121227">0491 12 12 27</a>
            </div>
        </div>
        <div class="flex items-center justify-center gap-6">
            <a href="/"><img src="{{ asset('images/Instagram.svg') }}" alt="logo" class="w-8 h-8 " /></a>
            <a href="/"><img src="{{ asset('images/linkedIn.svg') }}" alt="logo" class="w-8 h-8 " /></a>
            <a href="/"><img src="{{ asset('images/facebook.svg') }}" alt="logo" class="w-8 h-8 " /></a>
        </div>
    </div>
</footer>
