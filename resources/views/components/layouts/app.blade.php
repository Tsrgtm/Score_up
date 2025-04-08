<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title' , 'Score Up')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600;700&family=Merriweather:wght@400;700&family=Fira+Code:wght@400;500&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/24f74c1771.js" crossorigin="anonymous"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        @livewire('show-alerts')
        @include('components.layouts.partials.header')
        <main>
            @yield('content')
        </main>

        @include('components.layouts.partials.footer')
        @livewireScripts
    </body>
</html>
