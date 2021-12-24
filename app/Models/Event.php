<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;

    //Table Name
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'venue_id', 'datetime', 'price', 'reduced_price'
    ];


    public function venue()
    {
        return $this->belongsTo('App\Models\Venue','venue_id');
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class)->withTimestamps();
    }


    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'tickets', 'event_id', 'booking_id')
            ->withPivot('tickets_full_price', 'tickets_reduced_price')
            ->withTimestamps();
    }

}
