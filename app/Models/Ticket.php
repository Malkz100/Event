<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'booking_id', 'event_id'
    ];

    //Table Name
    protected $table = 'tickets';

    public function event()
    {
        return $this->belongsTo('App\Models\Event','event_id');
    }
}
