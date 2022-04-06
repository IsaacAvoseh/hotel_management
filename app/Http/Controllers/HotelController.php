<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function Home()
    {
        return view('user.home');
    }

    public function Room()
    {
        return view('user.rooms');
    }

    public function Contact(Request $request)
    {
        if($request->isMethod('post'))
        {
            // dd($request->all());
           $request->validate([
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
            $data = $request->all();
            $contact = new Contact;
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->message = $data['message'];
            $saved = $contact->save();
            if($saved)
            {
                return redirect()->back()->with('success', 'Message sent successfully, We will contact you soon, Please check your mail');
            }
            else
            {
                return redirect()->back()->with('error', 'Something Went wrong, please try again');
            }
        }
        return view('user.contact');
    }

    public function Booking()
    {
        return view('user.booking');
    }

    public function Royal()
    {
        return view('user.royal');
    }

    public function Business()
    {
        return view('user.business');
    }

    public function Purple()
    {
        return view('user.purple');
    }

    public function Regular()
    {
        return view('user.regular');
    }

    public function Green()
    {
        return view('user.green');
    }

    public function Orange()
    {
        return view('user.orange');
    }

    public function Classic()
    {
        return view('user.classic');
    }
}
