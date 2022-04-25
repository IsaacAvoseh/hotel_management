<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Foundation\Auth\User as Model;

class Staff extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->hasOne(Role::class, 'id', 'role');
    }
}
