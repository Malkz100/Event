<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
    use HasFactory;

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

    public function tickets()
    {
        return $this->hasMany(Ticket::class)->withTimestamps();
    }

    public function booking()
    {
        return $this->belongsToMany(Booking::class)->withTimestamps();
    }
}
