<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Venue;
use App\Models\Customer;
use App\Models\Event;
use Illuminate\Http\Request;
//use App\Http\Requests\StoreBookingRequest;
//use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $booking = Booking::all();
        return response()->json($booking->load('event', 'customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return mixed
     */
    public function create(Booking $booking)
    {
        return view('booking.create', compact('booking'))
            ->with('events', Event::all())
            ->with('customers', Customer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return mixed
     */
    public function store(Request $request, Booking $booking)
    {
        $request->validate([
            'event_id' => 'required',
            'customer_id' => 'required',
            'booked_at' => 'required',
            'tickets_full_price' =>'numeric|min:0',
            'tickets_reduced_price' =>'numeric|min:0'
        ]);

        //Create booking from booking.create.blade form
        $booking = Booking::create($request->all());
//ddd($booking);

        //Insert 'tickets_full/reduced_price' into tickets pivot table
        $tickets_full_price = $request->get('tickets_full_price');
        $tickets_reduced_price = $request->get('tickets_reduced_price');
        $booking->events()->attach($booking->event->id,
            ['tickets_full_price' =>$tickets_full_price, 'tickets_reduced_price' =>$tickets_reduced_price]);

//ddd($booking);

        return redirect()->route('booking.index', compact('booking'))
            ->with('success','Booking created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking
     * @return mixed
     */
    public function show(Booking $booking)
    {
        return response()->json([
            'booking'=>$booking->load('event', 'customer'),
            'venue' =>$booking->event->venue,
            'tickets_full_price' =>$booking->events()->value('tickets_full_price'),
            'tickets_reduced_price' =>$booking->events()->value('tickets_reduced_price'),
            'total_cost' =>$booking->getTotalCost($booking),
            'image'=>$booking->event->venue->venueimages()->value('file_path')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking
     * @return mixed
     */
    public function edit(Booking $booking)
    {
        return view('booking.edit', compact('booking'))
            ->with('events', Event::all())
            ->with('customers', Customer::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return mixed
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'event_id' => 'required',
            'customer_id' => 'required',
            'booked_at' => 'required',
            'tickets_full_price' =>'numeric|min:0',
            'tickets_reduced_price' =>'numeric|min:0'
        ]);

        //Update booking from booking.edit.blade form
        $booking->update($request->all());

        //Update 'tickets_full/reduced_price' into tickets pivot table
        $tickets_full_price = $request->get('tickets_full_price');
        $tickets_reduced_price = $request->get('tickets_reduced_price');
        $booking->events()->update(
            ['tickets_full_price' =>$tickets_full_price, 'tickets_reduced_price' =>$tickets_reduced_price]);

//ddd($booking);

        return redirect()->route('booking.index', compact('booking'))
            ->with('success','Booking updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return mixed
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')
            ->with('success','Booking deleted successfully');
    }

}
