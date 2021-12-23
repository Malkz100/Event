@extends('admin.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>Add Booking</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('booking.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                </div>
                <div class="col-lg-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('booking.store') }}" method="POST">
                        @csrf

                        <div class="row">
{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="title"><strong>Event Title:</strong></label>--}}
{{--                                    <input type="text" name="title" class="form-control" placeholder="Event Title">--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label for="description"><strong>Description:</strong></label>--}}
{{--                                    <textarea class="form-control" rows="3" name="description" placeholder="Description"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="event_id" class="inline-flex items-center">
                                        <strong>Event:</strong></label>
                                    <select id="event_id" name="event_id" class="form-control">
                                        <option value="" disabled selected>  Select Event  </option>
                                        @foreach($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="artist_id"><strong>Select Customer: </strong></label>
{{--                                    <ul class="checkbox-grid">--}}
                                    <select name="customer_id" class="form-control">
                                        <option value="" disabled selected>  Select Customer  </option>
                                    @foreach($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->title }} {{ $customer->firstname }} {{ $customer->lastname }}</option>
{{--                                        <li><input type="checkbox" name="artists[]" value="{{ $customer->id }}">--}}
{{--                                            <label for="{{ $customer->lastname }}">{{ $customer->lastname }}</label></li>--}}

                                    @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="booked_at"><strong>Booking Date-Time:</strong></label>
{{--                                    <x-datepicker wire:model="datetime" name="datetime" class="form-control bg-white" />--}}
                                    <input type="text" value="{{Carbon\Carbon::now()}}"  name="booked_at" class="form-control" placeholder="{{Carbon\Carbon::now()->format('D jS \of M Y')}}">
                                </div>
                            </div>

{{--                            <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label><strong>Date-Time:</strong></label>--}}
{{--                                    <div class='input-group date' id='datetimepicker'>--}}
{{--                                        <input type='text' name="datetime" class="form-control" />--}}
{{--                                        <span class="input-group-addon">--}}
{{--                                            <span class="glyphicon glyphicon-calendar"></span>--}}
{{--                                            </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="tickets_full_price"><strong>No of Tickets Full Price:</strong></label>
                                    <select id="tickets_full_price"  name="tickets_full_price" class="form-control">
                                        <option value="" disabled selected>  Select no of tickets  </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>

                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="tickets_reduced_price"><strong>No of Tickets Discount Price:</strong></label>
{{--                                    <input type="text" size="4" name="tickets_reduced_price" class="form-control" placeholder="Type No of Tickets Required">--}}
                                    <select name="tickets_reduced_price" id="tickets_reduced_price" class="form-control">
                                        <option value="" disabled selected>  Select no of tickets  </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
