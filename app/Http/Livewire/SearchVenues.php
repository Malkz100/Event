<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Venue;

class SearchVenues extends Component
{
   // use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search-venues',[
            'venues' => Venue::where('name','like', $searchTerm)->paginate(5)
        ]);
    }
}
