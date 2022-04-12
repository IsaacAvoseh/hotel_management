<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{

    public function approveBooking(Request $request, $id){
    // dd($request->all());
    //   return redirect()->route('payment', ['booking' => base64_encode($booking)])->with('success', 'Booking successful, Please select payment method');
    //     } else {
    //         return redirect()->back()->with('error', 'Something Went wrong, please try again');
    //     }
    }

    public function bookingsByStaff(Request $request)
    {
        $request->validate([
            'check_in' => 'required',
            'check_out' => 'required',
            'room_type' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'room' => 'required',
        ]);
        // dd($request->all());
        // dd(base64_decode($request->room_type), base64_decode($request->room));
        $booking = new Booking();
        $booking->check_in = $request->check_in;
        $booking->check_out = $request->check_out;
        $booking->name = $request->name;
        $booking->booked_by = Auth::user()->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->children = $request->children;
        $booking->adults = $request->adults;
        $booking->room_type_id = base64_decode($request->room_type);
        $booking->room_id = base64_decode($request->room);
        $saved = $booking->save();
        if ($saved) {
            return redirect()->route('payment', ['booking' => base64_encode($booking)])->with('success', 'Booking successful, Please select payment method');
        } else {
            return redirect()->back()->with('error', 'Something Went wrong, please try again');
        }
    }

}
