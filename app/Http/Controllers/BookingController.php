<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer;
use App\Models\Event;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index()
    {
        $bookings = Booking::latest()->paginate(5);
        return view('booking.index',compact('bookings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
    public function store(StoreBookingRequest $request)
    {
        $request->validate([
            'event_id' => 'required',
            'customer_id' => 'required',
            'booked_at' => 'required',
            'tickets_full_price' => 'required',
            'tickets_reduced_price'
        ]);

        //Create booking from booking.create.blade form
        $booking = Booking::create($request->all());

        //Insert 'tickets' into tickets pivot table
//        $tickets = $request->get('tickets');
//        $booking->ticket()->sync($tickets);

        return redirect()->route('booking.index')
            ->with('success','Booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return mixed
     */
    public function show(Booking $booking)
    {
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
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
