<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }

    public function roomType()
    {
        return $this->belongsTo('App\Models\RoomType');
    }
}
