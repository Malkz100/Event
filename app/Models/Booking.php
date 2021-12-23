<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Booking extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'bookings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id', 'customer_id',  'booked_at'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }

//    public function ticket()
//    {
//        return $this->belongsTo('App\Models\Ticket','ticket_id');
//    }

//

    public function event()
    {
        return $this->belongsTo('App\Models\Event','event_id');
    }

    public function events()
    {
        return $this->belongsToMany(Event::class, 'booking_event', 'booking_id', 'event_id')
            //->using(Ticket::class)
            // ->as('tickets')
            ->withPivot( 'tickets_full_price', 'tickets_reduced_price')
            //->withPivot('tickets_full_price')
            ->withTimestamps();
    }

    public function getTicketsFull()
    {
        return $this->pivot->tickets_full_price;
    }

    public function foo()
    {
        return $this->pivot->tickets_full_price;
    }

}
