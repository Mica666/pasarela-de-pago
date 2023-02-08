<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="w-full h-full bg-repeat bg-left bg-local" style="background-image: url('https://i.pinimg.com/236x/c6/4c/b1/c64cb114e706611c0cc9ffd07c3bc636.jpg');">

                <div>
                @livewire('header')
                    @livewire('navegacion')
                    @livewire('carrusel')


                    <!-- Page Content -->
                    <main>
                    
                        {{ $slot }}
                    </main>
                </div>
                @livewire('footer')
                @stack('modals')

                @livewireScripts
            
        </div>
    </body>
</html>
