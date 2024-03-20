<div class="container">
    <div class="row">
        <div class="col-md-12">

            <input type="text"  class="form-control" placeholder="Type to search" wire:model="searchTerm" />

            <table class="table table-bordered" style="margin: 10px 0 10px 0;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($venues as $venue)
                    <tr>
                        <td>
                            <a href="{{ route('venue.show',$venue->id) }}">{{ $venue->name }}</a>
                        </td>
                        <td>
                            {{ $venue->email }}
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $venues->links() }}
        </div>
    </div>
</div>

