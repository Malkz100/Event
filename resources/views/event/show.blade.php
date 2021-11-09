@extends('event.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <div class="float-left">
            <h2>{{ $event->title }} -Event Details</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('event.index') }}"> Back</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row mt-2">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event:</strong>
                                {{ $event->title }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {{ $event->description }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Venue:</strong>
                                {{ $event->venue->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Artists: </strong>
                                @foreach($event->artists as $artist)

                                    <br/> {{ $artist->name }}

                                @endforeach
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Date:</strong>
                                {{ Carbon\Carbon::parse($event->datetime)->format('l jS \of F Y') }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Time:</strong>
                                {{ Carbon\Carbon::parse($event->datetime)->format('g:i a') }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Price: </strong>£
                                {{ $event->price }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Discount Price: </strong>£
                                {{ $event->reduced_price }}
                            </div>
                        </div>
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>event Phone:</strong>--}}
{{--                                {{ $event->event_phone }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Email:</strong>--}}
{{--                                {{ $event->email }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Website:</strong>--}}
{{--                                <a href="{{ $event->website }}">{{ $event->website }}</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Contact Name:</strong>--}}
{{--                                {{ $event->contact_name }}--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection