<?php

namespace App\Http\Controllers;

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

    public function Contact()
    {
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
