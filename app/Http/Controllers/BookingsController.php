<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class BookingsController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth')->except([
            'login', 'register'
        ]);
    }


    public function approveBooking(Request $request, $id){
        $booking = Booking::findOrfail(base64_decode($request->id));
    //   dd($booking);
        if($booking){
      return redirect()->route('payment', ['booking' => base64_encode($booking)])->with('success', 'Booking successful, Please select payment method');
         } else {
             return redirect()->back()->with('error', 'Something Went wrong, please try again');
         }
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

    public function bookingsPdf(Request $request)
    {
        if (Auth::user()->type !== 'admin') {
            return redirect()->back()->with('error', 'You are not Authorized to carry out this action , be careful I will report you to admin if you it again');
        }
        $bookings = Booking::all();
        view()->share('admin.bookings_pdf', $bookings);
        $pdf = PDF::loadView('admin.bookings_pdf', compact('bookings'));
        return $pdf->download('Bookings.pdf');
    }

    // public function ggg()
    // {
    //     $bookings = Booking::all();

    //     return view('admin.bookings_pdf', compact('bookings'));
    // }

}
