<div>
    <ul>
    @foreach($events as $event)
            <div class="card" style="width: 28rem;">
                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('home.showevent',$event->id) }}"> <li> {{ $event->title }}</li></a></h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <strong><p class="card-text">{{ Carbon\Carbon::parse($event->datetime)->format('l jS \of F Y') }}</p></strong>
                    <p class="card-text">{{ Carbon\Carbon::parse($event->datetime)->format('g:i a') }}</p>
                    <a href="{{ route('home.showevent',$event->id) }}" class="btn btn-primary">More Info</a>
                </div>
            </div>
    @endforeach
    </ul>
</div>
