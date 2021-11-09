<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        <input wire:model="search" type="text" placeholder="Search users..."/>

        <ul>
            @foreach($artists as $artist)
                <li>{{ $artist->name }}</li>
            @endforeach
        </ul>
    </div>
</div>
