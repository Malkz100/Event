<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Pivot
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id', 'event_id', 'tickets_full_price', 'tickets_reduced_price'
    ];

    //Table Name
    protected $table = 'tickets';

    public $incrementing = true;

    public function event() {
        return $this->belongsTo('event');
    }

    public function booking() {
        return $this->belongsTo('booking');
    }

    /**
     * TODO Calculate tickets available
     * @mixin Builder
    */
    public function getTicketsAvailable($event_id)
    {
        $venueCapacity = Venue::all()->capacity->where('event_id', $event_id)->first();

//        $ticketsSold = ($booking->events()->where('event_id', $event->id)->first()->pivot->tickets_full_price)
//        + ($booking->events()->where('event_id', $event->id)->first()->pivot->tickets_reduced_price);
//        return ($venueCapacity - $ticketsSold);
        return ($venueCapacity);
    }



//    public function event()
//    {
//        return $this->belongsTo('App\Models\Event','event_id');
//    }
//
//    public function booking()
//    {
//        return $this->belongsTo('App\Models\Booking','booking_id');
//    }
}
