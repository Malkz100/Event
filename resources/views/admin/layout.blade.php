<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Event Admin</title>


{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <wireui:scripts />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
{{--    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>--}}
    <!-- Bootstrap core CSS -->
{{--      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">--}}

<!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{--      <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/event.css') }}">

    @livewireStyles

</head>

<body>
{{--    --}}
{{--    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-1">--}}
{{--    @livewire('navigation-menu')--}}

{{--    <nav class="navbar navbar-brand bg-dark relative flex justify-between items-center sticky-top">--}}
{{--        --}}
{{--        <div class="d-flex">--}}
{{--        <!-- Logo -->--}}
{{--        <div class="flex-shrink-0 flex items-center">--}}


{{--            <!-- Navigation Links -->--}}
{{--            --}}{{--                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">--}}
{{--            --}}{{--                    <x-jet-nav-link href="{{ route('admin') }}" :active="request()->routeIs('admin')">--}}
{{--            --}}{{--                        {{ __('Admin') }}--}}
{{--            --}}{{--                    </x-jet-nav-link>--}}
{{--            --}}{{--                </div>--}}

{{--            --}}{{--    <div class="hidden  px-3 sm:-my-px sm:ml-10 sm:flex">--}}
{{--            --}}{{--        <x-jet-nav-link href="{{ route('home.index') }}" >--}}
{{--            <x-jet-nav-link href="home" >--}}
{{--                {{ __('View Website') }}--}}
{{--            </x-jet-nav-link>--}}
{{--            --}}{{--    </div>--}}

{{--            --}}{{--    <ul class="navbar-nav px-3">--}}
{{--            --}}{{--        <li class="sm:-my-px sm:flex">--}}
{{--            --}}{{--            <a class="navbar-brand nav-item" href="{{ route('home.index') }}">--}}
{{--            --}}{{--                <x-jet-application-mark class="block h-2 w-auto" />--}}
{{--            --}}{{--            </a>--}}
{{--            --}}{{--        </li>--}}
{{--            --}}{{--    </ul>--}}
{{--        </div>--}}
{{--        --}}{{--          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Event Admin</a>--}}
{{--        --}}{{--          <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
{{--        <ul class="navbar-nav px-3">--}}
{{--            <li class="nav-item text-nowrap">--}}
{{--                --}}{{--                  <a class="nav-link" href="#">Sign out</a>--}}

{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}
{{--                    <x-jet-dropdown-link href="{{ route('logout') }}"--}}
{{--                                         onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-jet-dropdown-link>--}}
{{--                </form>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--    </nav>--}}
{{--<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">--}}
{{--    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>--}}
{{--    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--        <span class="navbar-toggler-icon"></span>--}}
{{--    </button>--}}
{{--    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">--}}
{{--    <ul class="navbar-nav px-3">--}}
{{--        <li class="nav-item text-nowrap">--}}
{{--            <a class="nav-link" href="#">Sign out</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}
{{--<div class="container">--}}
{{--    <div class="container">--}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                <a class="navbar-brand" href="#">Container</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
{{--                            <a class="nav-link" href="#">Sign out</a>--}}
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link disabled">Disabled</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">Dropdown</a>--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <a class="dropdown-item" href="#">Action</a>--}}
{{--                                <a class="dropdown-item" href="#">Another action</a>--}}
{{--                                <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    </ul>
                    <form class="form-inline my-2 my-md-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>

        </nav>
{{--    </div>--}}

<div class="container-fluid">

{{--        <nav class="col-md-2 d-none d-md-block bg-light sidebar">--}}
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home.index') }}">
                            <span data-feather="home"></span>
                            Front End           <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('event.index') }}" >
                            <span data-feather="star"></span>
                            Events
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('eventimage.index') }}">
                            <span data-feather="camera"></span>
                            Event Pic
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('venue.index') }}">
                            <span data-feather="home"></span>
                            Venues
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('venueimage.index') }}">
                            <span data-feather="camera"></span>
                            Venue Pic
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('artist.index') }}">
                            <span data-feather="users"></span>
                            Artists
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('artistimage.index') }}">
                            <span data-feather="camera"></span>
                            Artist Pic
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('genre.index') }}">
                            <span data-feather="music"></span>
                            Genres
                        </a>
                    </li>



                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        <span>Bookings</span>
{{--                        <a class="d-flex align-items-center text-muted" href="#">--}}
{{--                            <span data-feather="plus-circle"></span>--}}
{{--                        </a>--}}
                    </h6>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customer.index') }}">
                            <span data-feather="users"></span>
                            Customers
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('booking.index') }}">
                            <span data-feather="tag"></span>
                            Bookings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <!-- Page Content -->
{{--            <main>--}}
                @yield('content')

                @if( isset($slot) )
                    {{ $slot }}
                @endif
{{--                @livewireScripts--}}
{{--            </main>--}}
            </div>
        </main>
    </div>
{{--</div>--}}

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>--}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>

<script>
    feather.replace()
</script>

@stack('modals')
@livewireScripts

<script>
    //Script to set current nav-item to 'active'
    $(document).ready(function() {

         url = [location.protocol, '//', location.host, location.pathname].join('');

        $('.nav-item.active').removeClass('active');
        $('.nav-item a[href="' + url  + '"]').parent().addClass('active');
        $(this).parent().addClass('active').siblings().removeClass('active');
    });
</script>

</body>
</html>
