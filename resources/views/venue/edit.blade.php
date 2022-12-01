@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $venue->name }} -Update Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('venue.index') }}"> Back</a>
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

                    <form action="{{ route('venue.update',$venue->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name"><strong>Venue Name:</strong></label>
                                    <input id="name" type="text" name="name" value="{{ $venue->name }}" class="form-control" placeholder="Venue Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="description"><strong>Description:</strong></label>
                                    <textarea id="description" class="form-control" style="height:70px" name="description" placeholder="Description">{{ $venue->description }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="address1"><strong>Address Line 1:</strong></label>
                                    <input id="address1" type="text" name="address1" value="{{ $venue->address1 }}" class="form-control" placeholder="Address Line 1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="address2"><strong>Address Line 2:</strong></label>
                                    <input id="address2" type="text" name="address2" value="{{ $venue->address2 }}" class="form-control" placeholder="Address Line 2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="city"><strong>City / Town:</strong></label>
                                    <input id="city" type="text" name="city" value="{{ $venue->city }}" class="form-control" placeholder="City / Town">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="county"><strong>County:</strong></label>
                                    <input id="county" type="text" name="county" value="{{ $venue->county }}" class="form-control" placeholder="County">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="postcode"><strong>Postcode:</strong></label>
                                    <input id="postcode" type="text" name="postcode" value="{{ $venue->postcode }}" class="form-control" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="phone"><strong>Venue Phone:</strong></label>
                                    <input id="phone" type="text" name="venue_phone" value="{{ $venue->venue_phone }}" class="form-control" placeholder="Venue Phone">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="email"><strong>Email:</strong></label>
                                    <input id="email" type="text" name="email" value="{{ $venue->email }}" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <dicontactv class="form-group">
                                    <label for="website"><strong>Website:</strong></label>
                                    <input id="website" type="text" name="website" value="{{ $venue->website }}" class="form-control" placeholder="Website">
                                </dicontactv>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contact"><strong>Contact Name:</strong></label>
                                    <input id="contact" type="text" name="contact_name" value="{{ $venue->contact_name }}" class="form-control" placeholder="Contact Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="capacity"><strong>Venue Capacity:</strong></label>
                                    <input id="capacity" type="text" name="capacity" value="{{ $venue->capacity }}" class="form-control" placeholder="Venue Capacity">
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
