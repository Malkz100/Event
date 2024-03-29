<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Event') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
        <link rel="stylesheet" href="{{ asset('css/event.css') }}">



    </head>
    <body>
{{--    <h1>Test</h1>--}}
        <div class="container">
{{--            @livewire('navigation-menu')--}}
{{--        <div class="font-sans text-gray-900 antialiased">--}}

            <!-- Page Content -->
            <main>
                @yield('content')

                @if( isset($slot) )
                    {{ $slot }}
                @endif

            </main>
        </div>
        <!-- Scripts -->
        @livewireScripts
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>

</html>
