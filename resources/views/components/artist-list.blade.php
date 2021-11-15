<div>
    <ul>
    @foreach($artists as $artist)
{{--            <a href="{{ route('event.show',$event->id) }}"> <li> {{ $event->title }}</li></a>--}}
            <a href="{{ route('home.showartist',$artist->id) }}"> <li> {{ $artist->name }}</li></a>
    @endforeach
    </ul>
</div>
