<!DOCTYPE html>
<html>
<head>
    <title></title>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header text-black ">
                    <div class="float-right">
                        <a href="{{ route('home.index') }}">Home</a>
                    </div>
                    <p><strong>Search Artists</strong></p>
                </div>
                <div class="card-body">
                    @livewire('search-artists')
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
</html>
