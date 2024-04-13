<div>
    <ul>
    @foreach($events as $event)
            <div class="card" style="width: 28rem;">
{{--                @foreach ($event->venue->venueimages as $venueimage)--}}
                @foreach ($event->eventimages as $eventimage)
                    <img class="card-img-top img-thumbnail img-fluid" src="{{ asset('storage/images/events/'.$eventimage->file_path) }}" alt="Card image cap">
                    <div class="caption">
                        <p> {{ $eventimage->name }}</p>
                    </div>
                @endforeach
                <div class="card-body">
                    <h2 class="card-title"><a href="{{ route('home.showevent',$event->id) }}"> <li> {{ $event->title }}</li></a> at {{ $event->venue->name }}</h2>
                    <p class="card-text">{{ $event->description }}</p>
                    <strong><p class="card-text">{{ Carbon\Carbon::parse($event->start_datetime)->format('l jS \of F Y') }}</p></strong>
                    <p class="card-text">{{ Carbon\Carbon::parse($event->start_datetime)->format('g:i a') }}</p>

                    @if(isset($event->end_datetime))
                        <p>to</p>
                    <strong><p class="card-text">{{ Carbon\Carbon::parse($event->end_datetime)->format('l jS \of F Y') }}</p></strong>
                    <p class="card-text">{{ Carbon\Carbon::parse($event->end_datetime)->format('g:i a') }}</p>
                    @endif

                    <a href="{{ route('home.showevent',$event->id) }}" class="btn btn-primary">More Info</a>
                </div>
            </div>
    @endforeach
    </ul>
</div>
