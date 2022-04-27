<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use RealRashid\SweetAlert\Facades\Alert;

use function PHPSTORM_META\type;

class HotelController extends Controller
{
    public function Home()
    {
       try{
            $abouts = About::all();
            $aboutus = About::find(1);
            $room_type = RoomType::all();
            $rooms = RoomType::all();
            return view('user.home', compact('room_type', 'abouts', 'rooms', 'aboutus'));
       }catch (\Exception $e){
           Alert::error('Error', 'Something went wrong! Server not running');
           return view('user.home');
       }
    }

    public function Room(Request $request)
    {
       try{
            $abouts = About::all();
            $room_type = RoomType::all();
            $rooms = RoomType::all();
            // dd($room_type);

            return view('user.rooms', compact('room_type', 'rooms', 'abouts'));
       }catch (\Exception $e){
           Alert::error('Error', 'Something went wrong! Server not running');
           return view('user.rooms');
       }
    }

    public function Orange(Request $request)
    {
       try{
            $abouts = About::all();
            $room_type = RoomType::all();
            $room = RoomType::find(base64_decode($request->id));
            return view('user.orange', compact('room', 'room_type', 'abouts'));
       }catch (\Exception $e){
           Alert::error('Error', 'Something went wrong! Server not running');
           return view('user.orange');
       }
    }

    //get rooms under a room type
    public function getRooms(Request $request)
    {
        // dd($request->all());
        $room_type_id = RoomType::find(base64_decode($request->id));
        echo  json_encode(Room::where('room_type_id', $room_type_id->id)->get());
        // // dd($rooms);
        // return response()->json([
        //     'room' => $rooms
        // ]);
        // echo json_encode(DB::table('sub_categories')->where('category_id', $id)->get());
    }


    public function Contact(Request $request)
    {
         try{
                $abouts = About::all();
                $contacts = Contact::all();
                return view('user.contact', compact('abouts', 'contacts'));
            }catch (\Exception $e){
                Alert::error('Error', 'Something went wrong! Server not running');
                return view('user.contact');
            }
    
        if ($request->isMethod('post')) {
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
           
            try{
                $saved = $contact->save();
                if ($saved) {
                    return redirect()->back()->with('success', 'Message sent successfully, We will contact you soon, Please check your mail');
                } else {
                    return redirect()->back()->with('error', 'Something Went wrong, please try again');
                }
            }catch (\Exception $e){
                Alert::error('Error', 'Something went wrong! Server not running');
                return redirect()->back()->with('error', 'Something Went wrong, please try again');
            }
        }
        // return view('user.contact', compact('abouts', 'aboutus'));
    }

    public function Booking()
    {
       try{
            $abouts = About::all();
            $bookings = Booking::all();
            $room_type = RoomType::all();
            return view('user.booking', compact('abouts', 'room_type', 'bookings'));
       }catch (\Exception $e){
           Alert::error('Error', 'Something went wrong! Server not running');
           return view('user.booking');
       }
    }

    public function getBookings(Request $request)
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
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->children = $request->children;
        $booking->adults = $request->adults;
        $booking->room_type_id = base64_decode($request->room_type);
        $booking->room_id = base64_decode($request->room);
        $saved = $booking->save();
        if ($saved) {
            return redirect()->back()->with('success', 'Room Booked Successfully, we wil get back to you shortly, please check your email. Thank you for choosing us');
        } else {
            return redirect()->back()->with('error', 'Something Went wrong, please try again');
        }
    }
}
