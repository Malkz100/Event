@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $event->title }} -Update Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('event.index') }}"> Back</a>
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

                    <form action="{{ route('event.update',$event->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="title"><strong>Event Name:</strong></label>
                                    <input id="title" type="text" name="title" value="{{ $event->title }}" class="form-control" placeholder="event Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="description"><strong>Description:</strong></label>
                                    <textarea id="description" class="form-control" style="height:70px" name="description" placeholder="Description">{{ $event->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                        <label for="venue"><strong>Venue:</strong></label>
                                        <select id="venue" name="venue_id" class="form-control">
                                            <option value="{{ $event->venue->id }}">{{ $event->venue->name }}</option>
                                            @foreach($venues as $venue)
                                                <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" >
                                    <label ><strong>Start Date-Time:</strong></label>
                                    <x-datepicker wire:model="datetime"  value="{{$event->start_datetime}}" name="start_datetime" placeholder="{{ Carbon\Carbon::parse($event->start_datetime)->format('l jS \of F Y') }}" class="form-control bg-white" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group" >
                                    <label ><strong>End Date-Time:</strong></label>
                                    <x-datepicker wire:model="datetime"  value="{{$event->end_datetime}}" name="end_datetime" placeholder="{{ Carbon\Carbon::parse($event->end_datetime)->format('l jS \of F Y') }}" class="form-control bg-white" />
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="artists"><strong>Artists: </strong></label>
                                    @foreach($artists as $artist)

                                        <br/><input id="artists" type="checkbox" name="artists[]" value="{{ $artist->id }}"
                                                    {{ $artist->events->contains($event->id) ? 'checked' : '' }}
                                                    @if(in_array($artist->id,old('artist',[]))) checked  @endif>
                                        <label for="{{ $artist->name }}">{{ $artist->name }}</label>

                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="price"><strong>Price:</strong></label>
                                    <input id="price" type="text" name="price" value="{{ $event->price }}" class="form-control" placeholder="Price">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="discount"><strong>Discount Price:</strong></label>
                                    <input id="discount" type="text" name="reduced_price" value="{{ $event->reduced_price }}" class="form-control" placeholder="Discount Price">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
