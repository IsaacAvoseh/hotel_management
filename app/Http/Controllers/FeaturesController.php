<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\RoomType;
use Illuminate\Http\Request;

class FeaturesController extends Controller
{


    public function features(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',

            ]);
            $feature = new Feature();
            $feature->name = $request->name;
            $feature->air_conditioner = $request->air_conditioner ? 1 : 0;
            $feature->unlimited_wifi = $request->unlimited_wifi ? 1 : 0;
            $feature->drinks = $request->drinks ? 1 : 0;
            $feature->restaurant = $request->restaurant ? 1 : 0;
            $feature->cable_tv = $request->cable_tv ? 1 : 0;
            $feature->hour_front_desk = $request->hour_front_desk ? 1 : 0;
            // dd($service);
            $saved = $feature->save();
            if ($saved) {
                return redirect()->back()->with('success', 'Features added successfully');
            } else {
                return redirect()->back()->with('error', 'Features not added');
            }
        }
        return view('admin.features');
    }

    public function addRoomFeatures(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'service_id' => 'required',
        ]);

        $roomFeatures = new RoomType();
        $roomFeatures->name = $request->name;
        $roomFeatures->features_id = $request->service_id;
        $saved = $roomFeatures->save();
        if ($saved) {
            return redirect()->back()->with('success', 'Room Type added successfully');
        } else {
            return redirect()->back()->with('error', 'Room Type not added');
        }
    }


}
