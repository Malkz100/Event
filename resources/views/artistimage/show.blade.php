@extends('artistimage.layout')

@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h2>{{ $artistimage->name }} -Image Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('artistimage.index') }}"> Back</a>
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
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label><strong>Image Name:</strong></label>
                                {{ $artistimage->name }}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <table>
                                    <label><th>Image</th></label>

{{--                                @foreach ($images as $image)--}}
                                <tr>
                                    <td><img src="{{ asset('storage/images/artists/'.$artistimage->file_path) }}" alt="Artist Image" height="200px"></td>

                                </tr>
{{--                                @endforeach--}}
                                </table>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
