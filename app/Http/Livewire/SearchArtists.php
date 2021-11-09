<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Artist;



class SearchArtists extends Component
{
    public function render()
    {
        return view('livewire.search-artists', [
            'artists' => Artist::where('name', $this->search)->get(),
        ]);
    }
}
