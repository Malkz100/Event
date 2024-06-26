@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $eventimage->name }} -Image Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 mt-1 mr-1">
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('eventimage.index') }}"> Back</a>
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
                                <label><strong>Event:</strong></label>
                                {{ $eventimage->event->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label><strong>Caption:</strong></label>
                                {{ $eventimage->name }}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <table>
                                    <label><th>Image</th></label>

{{--                                @foreach ($eventimage as $image)--}}
                                <tr>
                                    <td><img src="{{ asset('storage/images/events/'.$eventimage->file_path) }}" alt="Event Image" height="200px"></td>

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
