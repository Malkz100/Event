<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id', 'event_id', 'booked_at'
    ];

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Models\Ticket','ticket_id');
    }

    public function event()
    {
        return $this->belongsTo('App\Models\Event','event_id');
    }
}
