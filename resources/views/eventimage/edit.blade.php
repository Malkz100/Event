@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h2>{{ $eventimage->name }} -Update Details</h2>
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

                    <form action="{{ route('eventimage.update',$eventimage->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="event_id" class="inline-flex items-center">
                                    <strong>Event:</strong></label>
                                <label>
                                    <select name="event_id" class="form-control">
                                        <option value="{{ $eventimage->event->id }}">{{ $eventimage->event->name }}</option>
{{--                                        <option value="" disabled selected> -- Select event -- </option>--}}
                                        @foreach($events as $event)
                                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="caption"><strong>Caption:</strong></label>
                                    <input id="caption"  type="text" name="name" value="{{ $eventimage->name }}" class="form-control" placeholder="Image Name">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <table>
                                        <label><th>Current Image</th></label>

                                        {{--                                @foreach ($images as $image)--}}
                                        <tr>
                                            <td><img src="{{ asset('storage/images/events/'.$eventimage->file_path) }}" alt="Event Image" height="150px"></td>
                                        </tr>
                                        {{--                                @endforeach--}}
                                    </table>
                                </div>
                            </div>

{{--                            <div class="row">--}}
{{--                                <div class="col-xs-12 col-sm-12 col-md-12">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label><strong>Image Name:</strong></label>--}}
{{--                                        <input type="text" name="name" class="form-control" placeholder="Image Name">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group">
                                    <input type="file" name="file">
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-success">Update Image</button>
                                </div >
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
