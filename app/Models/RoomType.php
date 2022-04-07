<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
        'price',
        'size',
        'capacity',
        'bed',
        'no_of_rooms',
        'image',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'service_id',   
    ];
}
