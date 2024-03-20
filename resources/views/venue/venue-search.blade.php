{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title></title>--}}
{{--    @livewireStyles--}}
{{--    <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />--}}
{{--</head>--}}
{{--<body>--}}

@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-0">
            <div class="card">
                <div class="card-header text-black ">
                    <div class="float-right">
                        <a class="h4" href="{{ route('venue.index') }}">Back</a>
                    </div>
                    <h4>Search Venues</h4>
                </div>
                <div class="card-body">
                    @livewire('admin-venue-search')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts

@endsection

{{--</body>--}}

{{--@livewireScripts--}}
{{--</html>--}}
