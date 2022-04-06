<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    //fillable
    protected $fillable = [
        'name',
        'email',
        'message',
        'status',
        'reply_title',
        'reply_time',
        'reply_body',
    ];

    use SoftDeletes;
}
