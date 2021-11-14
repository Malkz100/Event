<div>
    Events Listed Here<br/>
    <ul>
    @foreach($events as $event)
{{--            <a href="{{ route('event.show',$event->id) }}"> <li> {{ $event->title }}</li></a>--}}
            <a href="{{ route('event.showevent',$event->id) }}"> <li> {{ $event->title }}</li></a>
    @endforeach
    </ul>

</div>
