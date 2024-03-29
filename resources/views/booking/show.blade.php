@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-left">
                <span class="inline-flex"><h2>{{ $booking->event->title }}</h2><h6>Booking Details</h6></span>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
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
                                {{ $booking->event->title }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {{ $booking->event->description }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Venue:</strong>
                                {{ $booking->event->venue->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Artists: </strong>
                                <ul>
                                @foreach($booking->event->artists as $artist)

                                    <li><a href="{{ route('artist.show',$artist->id) }}">{{ $artist->name }}</a></li>

                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Booked on:</strong>
                                {{ Carbon\Carbon::parse($booking->event->datetime)->format('l jS \of F Y') }} <strong>  Time:</strong> {{ Carbon\Carbon::parse($booking->event->datetime)->format('g:i a') }}
                            </div>
                        </div>
{{--                        <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                            <div class="form-group">--}}
{{--                                <strong>Time:</strong>--}}
{{--                                {{ Carbon\Carbon::parse($booking->event->datetime)->format('g:i a') }}--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>For Customer:</strong>
                                {{ $booking->customer->title }} {{ $booking->customer->firstname }} {{ $booking->customer->lastname }}
                            </div>
                        </div>

                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <strong>Tickets Full Price: </strong>
                                {{ $booking->events()->where('booking_id', $booking->id)->first()->pivot->tickets_full_price }} @ £{{ $booking->event->price }}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <strong>Tickets Discount Price: </strong>
                                {{ $booking->events()->where('booking_id', $booking->id)->first()->pivot->tickets_reduced_price }} @ £{{ $booking->event->reduced_price }}
                            </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="form-group">
                                <strong>Total Price: </strong>
                                £{{ number_format($booking->getTotalCost($booking),2) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
