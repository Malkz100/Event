<div>
    <ul>
    @foreach($events as $event)
{{--            <a href="{{ route('event.show',$event->id) }}"> <li> {{ $event->title }}</li></a>--}}
            <a href="{{ route('home.showevent',$event->id) }}"> <li> {{ $event->title }}</li></a>
    @endforeach
    </ul>
</div>
