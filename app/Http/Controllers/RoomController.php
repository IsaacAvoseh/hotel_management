<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    //edit roomtypes
    public function edit($id)
    {
        $room = RoomType::find($id);
        
    }

}
