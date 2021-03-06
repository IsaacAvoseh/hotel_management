<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class PaymentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([
            'login', 'register'
        ]);
    }

    public function payment(Request $request)
    {
        $bookingData = base64_decode($request->booking);
        // $bookingData = base64_decode($request->booking)==null ? Booking::find(base64_decode($request->booking->id)) : base64_decode($request->booking);
        $bookingData = json_decode($bookingData);
        // dd($bookingData);
        // $bookingData = Booking::find(base64_decode($request->bookingId));
        // dd(json_decode($bookingData));
        $payment = new Payment();
        if ($request->isMethod('post')) {
            $bookingData = $request->all();
            // dd($bookingData);
            $payment->booking_id = $bookingData['booking_id'];
            $payment->amount = $bookingData['amount'];
            $payment->payment_method = $bookingData['payment_method'];
            $payment->guest_name = $bookingData['guest_name'];
            $payment->status = $bookingData['status'];
            $payment->user_id = Auth::user()->id;
            $payment->reference = $bookingData['reference'];
            $saved = $payment->save();
            if ($saved) {

              return response()->json([
                  'status' => 'success',
                  'message' => 'Payment Successful'
              ], 200);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Payment Failed'
                ], 302);
                }
        }
        $roomType = RoomType::find($bookingData->room_type_id);
        // dd($roomType);
        return view('admin.payment.payment', compact('bookingData', 'roomType'));
    }

    public function paymentReport(Request $request)
    {
        $payments = Payment::all();
        return view('admin.payment.payment_report', compact('payments'));
    }

    public function paymentsPdf(Request $request)
    {
        if (Auth::user()->type !== 'admin') {
            return redirect()->back()->with('error', 'You are not Authorized to carry out this action , be careful I will report you to admin if you it again');
        }
        $payments = Payment::all();
        view()->share('admin.payment.payments_pdf', $payments);
        $pdf = PDF::loadView('admin.payment.payments_pdf', compact('payments'));
        return $pdf->download('Payments.pdf');
    }
}
