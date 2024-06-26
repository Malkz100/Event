<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Artist;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $events = Event::latest()->paginate(5);
        return view('event.index',compact('events'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create(Event $event)
    {
        return view('event.create', compact('event'))
            ->with('venues', Venue::all())
            ->with('artists', Artist::all());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return mixed
     */
    public function store(StoreEventRequest $request)
    {
//        $request->validate([
//            'title' => 'required',
//            'description' => 'required',
//            'venue_id' => 'required',
//            'start_datetime' => 'required',
//            'end_datetime' => 'nullable',
//            'price' => 'nullable|numeric|min:0',
//            'reduced_price'  => 'nullable|numeric|min:0'
//        ]);

        //Create event from blade form
        $event = Event::create($request->all());

        //Insert 'artist' checkbox array into pivot table
        $artists = $request->get('artists');
        $event->artists()->sync($artists);

        return redirect()->route('event.index')
                         ->with('success','Event  created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Event $event
     * @return mixed
     */
    public function show(Event $event)
    {
       return view('event.show',compact('event'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Event $event
     * @return mixed
     */
    public function edit(Event $event)
    {
        return view('event.edit', compact('event'))
            ->with('venues', Venue::all())
            ->with('artists', Artist::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Event $event
     * @return mixed
     */
    public function update(StoreEventRequest $request, Event $event)
    {
        $event->update($request->all());

        //Update 'artist' checkbox array into pivot table
        $artists = $request->get('artists');
        $event->artists()->sync($artists);

        return redirect()->route('event.index')
                         ->with('success','Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Event $event
     * @return mixed
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return redirect()->route('event.index')
                         ->with('success','Event deleted successfully');
    }

}
