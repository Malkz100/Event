<?php

namespace App\View\Components;

use Carbon\Carbon;
use Illuminate\View\Component;
use App\Models\Event;

class EventList extends Component
{
    public $eventList;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
 //       $this->eventList = $eventList;
//        $eventList = Event::latest();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.event-list')
            ->with('events', Event::where('start_datetime','>=' ,Carbon::now()->format('Y-m-d'))
                ->orderBy('start_datetime')
                ->get());

    }
}
