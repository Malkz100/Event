@extends('admin.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-0">
            <div class="card">
                <div class="card-header text-black ">
                    <div class="float-right">
                        <a class="h4" href="{{ route('event.index') }}">Back</a>
                    </div>
                    <h4>Search events</h4>
                </div>
                <div class="card-body">
                    @livewire('admin-event-search')
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
@livewireScripts
@endsection
