<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

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
