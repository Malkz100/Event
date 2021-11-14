<div>
    Artists Listed Here<br/>
    <ul>
    @foreach($artists as $artist)
{{--            <a href="{{ route('event.show',$event->id) }}"> <li> {{ $event->title }}</li></a>--}}
            <a href="{{ route('artist.showartist',$artist->id) }}"> <li> {{ $artist->name }}</li></a>
    @endforeach
    </ul>

</div>
