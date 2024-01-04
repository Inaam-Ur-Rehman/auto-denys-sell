<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-[#131313]">
    {{-- // show notification if session has and disappears after2 sec --}}
    @if (session()->has('message'))
        <div
            class="fixed z-[400] flex items-center justify-center max-w-max h-16 px-4 py-2 text-white bg-green-500 top-2 right-2">
            <p>{{ session('message') }}</p>
        </div>
        <script>
            setTimeout(() => {
                document.querySelector('.fixed').remove();
            }, 2000);
        </script>
    @endif

    <x-navbar />
    @yield('content')
    <x-footer />
    @vite('resources/js/app.js')
</body>

</html>
