<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class RoomController extends Controller
{

    public function room(Request $request)
    {
        $features = Feature::all();
        $rooms = RoomType::all();
        // dd($rooms);
        $roomNumber = Room::with('roomType.feature')->get();
        // dd($roomNumber);

        if ($request->isMethod('post')) {
            if (Auth::user()->type !== 'admin') {
                return redirect()->back()->with('error', 'You are not Authorized to carry out this action , be careful I will report you to admin if you it again');
            }

            // dd($request->all());
            $request->validate([
                'name' => 'required',
                'price' => 'required',
                'size' => 'required',
                'capacity' => 'required',
                'bed' => 'required',
                'no_of_rooms' => 'required',
            ]);

            $room_type = new RoomType();
            $room_type->name = $request->name;
            $room_type->price = $request->price;
            $room_type->size = $request->size;
            $room_type->capacity = $request->capacity;
            $room_type->bed = $request->bed;
            $room_type->no_of_rooms = $request->no_of_rooms;


            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $image->move(public_path('/admin/rooms'), $image_name);
                $image_path = '/admin/rooms/' . $image_name;
            } else {
                $image_path = '/admin/room.jpg';
            }
            if ($request->hasFile('image_1')) {
                $image1 = $request->file('image_1');
                $image_name1 = $image1->getClientOriginalName();
                $image1->move(public_path('/admin/rooms'), $image_name1);
                $image_path1 = '/admin/rooms/' . $image_name1;
            } else {
                $image_path1 = '/admin/room.jpg';
            }
            if ($request->hasFile('image_2')) {
                $image2 = $request->file('image_2');
                $image_name2 = $image2->getClientOriginalName();
                $image2->move(public_path('/admin/rooms'), $image_name2);
                $image_path2 = '/admin/rooms/' . $image_name2;
            } else {
                $image_path2 = '/admin/room.jpg';
            }
            if ($request->hasFile('image_3')) {
                $image3 = $request->file('image_3');
                $image_name3 = $image3->getClientOriginalName();
                $image3->move(public_path('/admin/rooms'), $image_name3);
                $image_path3 = '/admin/rooms/' . $image_name3;
            } else {
                $image_path3 = '/admin/room.jpg';
            }
            if ($request->hasFile('image_4')) {
                $image4 = $request->file('image_4');
                $image_name4 = $image4->getClientOriginalName();
                $image4->move(public_path('/admin/rooms'), $image_name4);
                $image_path4 = '/admin/rooms/' . $image_name4;
            } else {
                $image_path4 = '/admin/room.jpg';
            }

            $room_type->image = $image_path;
            $room_type->image_1 = $image_path1;
            $room_type->image_2 = $image_path2;
            $room_type->image_3 = $image_path3;
            $room_type->image_4 = $image_path4;
            $room_type->features_id = $request->feature_id;
            $saved = RoomType::create($room_type->toArray());
            if ($saved['id']) {
                // dd($saved['id']);
                //save list of room to table rooms depending on the number of $request->no_of_rooms entered, if $request->no_of_rooms is 10 , save 10 rooms to database
                for ($i = 0; $i < number_format($room_type->no_of_rooms);) {
                    $room = new Room();
                    $room->name = 'Room' . $i + 1;
                    $room->room_type_id = $saved['id'];
                    // $room->status = 'available';
                    $room->room_no = strtoupper('R' . rand(100, 999));
                    $saved1 = $room->save();
                    $i++;
                }
                if ($saved1) {

                    return redirect()->back()->with('success', 'Room added successfully');
                } else {
                    return back()->with('error', 'Something went wrong while adding Room');
                }
            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again');
            }
        }

        if ($features->count() < 1) {
            Alert::error('Please add a feature first', 'Error');
        }
        return view('admin.room', compact('features', 'rooms', 'roomNumber'));
    }

    //edit roomtypes
    public function edit($id)
    {
        $room = RoomType::find($id);
        
    }

}
