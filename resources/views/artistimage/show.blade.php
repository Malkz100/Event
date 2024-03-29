@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $artistimage->name }} -Image Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ url()->previous() }}"> Back</a>
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
                                <label><strong>Artist:</strong></label>
                                {{ $artistimage->artist->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label><strong>Caption:</strong></label>
                                {{ $artistimage->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <table>
                                    <label><th>Image</th></label>

{{--                                @foreach ($artistimage as $image)--}}
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
