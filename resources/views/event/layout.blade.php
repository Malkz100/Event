<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Event Admin Panel</title>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- The "defer" attribute is important to make sure Alpine waits for Livewire to load first. -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/pikaday/css/pikaday.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    @livewireStyles

</head>
<body style="background: #e2e2e2;">
{{--<body class="font-sans antialiased">--}}
{{--<x-jet-banner />--}}
@livewire('navigation-menu')

<div class="container">

    <!-- Page Heading -->
{{--    @if (isset($header))--}}
{{--        <header class="bg-white shadow">--}}
{{--            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                {{ $header }}--}}
{{--            </div>--}}
{{--        </header>--}}
{{--    @endif--}}

    <div class="row">

        <div class="col-md-10 offset-1">
            @yield('content')
        </div>
    </div>
</div>

@livewireScripts
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/pikaday/pikaday.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>


{{--<script src="pikaday.js"></script>--}}
{{--<script>--}}
{{--    var picker = new Pikaday({ field: document.getElementById('datetime') });--}}
{{--</script>--}}


<script type="text/javascript">
    $(function() {
        $('#datetimepicker').datetimepicker({format:'YYYY/MM/DD HH:mm'});
    });
</script>
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

</html>
