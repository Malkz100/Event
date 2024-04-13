<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    use HasFactory;
    protected $table = 'eventimages';

    protected $fillable = [
        'event_id','name', 'file_path', 'created_at', 'updated_at'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

}
