@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">

            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('artist.index') }}"> Back</a>
            </div>
            <h2>Add Artist</h2>
        </div>
        <div class="card-body">
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mt-1 mr-1">--}}
{{--                    <div class="float-right">--}}
{{--                        <a class="btn btn-primary" href="{{ route('artist.index') }}"> Back</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
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

                        <div class="row">
                            <div class="col-lg-12 mt-1 mr-1">
                                <div class="float-right">
                                    <a class="btn btn-success" href="{{ route('artistimage.create') }}"> Upload Images</a>
                                </div>
                            </div>
                        </div>

                    <form action="{{ route('artist.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="artist_name"><strong>Artist Name:</strong></label>
                                    <input id="artist_name" type="text" name="name" class="form-control" placeholder="Artist Name">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="genres"><strong>Genres: </strong></label>
                                    <ul class="checkbox-grid">
                                    @foreach($genres as $genre)

                                        <li><input id="genres" type="checkbox" name="genres[]" value="{{ $genre->id }}">
                                        <label for="{{ $genre->name }}">{{ $genre->name }}</label></li>

                                    @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="biography"><strong>Biography:</strong></label>
                                    <textarea id="biography" class="form-control" rows="3" name="bio" placeholder="Biography"></textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="address1"><strong>Address Line 1:</strong></label>
                                    <input id="address1" type="text" name="address1" class="form-control" placeholder="Address Line 1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="address2"><strong>Address Line 2:</strong></label>
                                    <input id="address2" type="text" name="address2" class="form-control" placeholder="Address Line 2">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="city"><strong>City / Town:</strong></label>
                                    <input id="city" type="text" name="city" class="form-control" placeholder="City / Town">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="county"><strong>County:</strong></label>
                                    <input id="county" type="text" name="county" class="form-control" placeholder="County">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="postcode"><strong>Postcode:</strong></label>
                                    <input id="postcode" type="text" name="postcode" class="form-control" placeholder="Postcode">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="phone"><strong>Artist Phone:</strong></label>
                                    <input id="phone" type="text" name="phone" class="form-control" placeholder="Artist Phone">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="email"><strong>Email:</strong></label>
                                    <input id="email" type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="website"><strong>Website:</strong></label>
                                    <input id="website" type="text" name="website" class="form-control" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="contact"><strong>Contact Name:</strong></label>
                                    <input id="contact" type="text" name="contact_name" class="form-control" placeholder="Contact Name">
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
