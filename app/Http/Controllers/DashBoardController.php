<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMessage;
use App\Models\About;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Payment;
use App\Models\Role;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;
use RealRashid\SweetAlert\Facades\Alert;

class DashBoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     
     */
    public function __construct()
    {
        $this->middleware('auth')->except([
            'login', 'register'
        ]);
    }

    public function Admin()
    {
        //get total sales
        $total_sales = Payment::where('status', '=', 'paid')->orWhere('status', '=', 'success')->sum('amount');
        $total_online_payment = Payment::where('status', '=', 'success')->sum('amount');
        $total_cash_payment = Payment::where('status', '=', 'paid')->sum('amount');
        //percentage of online payment and cash payment
        $percentage_online_payment = ($total_online_payment / $total_sales) * 100;
        $percentage_cash_payment = ($total_cash_payment / $total_sales) * 100;
        // dd($total_sales);
        //total number of rooms
        $total_rooms = Room::count();
        //total rooms available
        $total_rooms_available = Room::where('status', '=', 'available')->count();
        //percentage of available rooms
        $percentage_rooms_available = ($total_rooms_available / $total_rooms) * 100;
        // dd($percentage_rooms_available);
        //total rooms booked
        $total_rooms_booked = Room::where('status', '=', 'booked')->count();
        //total roomtypes
        $total_roomtypes = RoomType::count();
        
        return view('admin.index', compact('total_sales', 'total_online_payment', 'total_cash_payment', 'percentage_online_payment', 'percentage_cash_payment', 'total_rooms', 'total_rooms_available', 'percentage_rooms_available','total_rooms_booked', 'total_roomtypes'));
      
    }

    public function login(Request $request)
    {

        //redirect to dashboard if user is already logged in
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        if ($request->isMethod('post')) {
            $cred = $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $data = $request->all();
            try {
                $user = User::where('email', $data['email'])->first();
            } catch (\Exception $e) {
                Alert::error('Server Error', 'Error');
                return redirect()->back()->with('error', 'Server Error');
            }
            if ($user) {
                if (Hash::check($data['password'], $user->password)) {
                    Auth::login($user);
                    $request->session()->put('user', $user);
                    return redirect()->route('dashboard')->with('success', ucfirst($user->type) . ' '. 'Logged In Successfully');
                } else {
                    return redirect()->back()->with('error', 'Invalid password');
                }
            } else {
                
                    return redirect()->back()->with('error', 'Invalid email');
              }
            
        }

        return view('admin.login');
    }

    //log user out
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('login');
    }

    public function register(Request $request)
    {
        //redirect to dashboard if user is already logged in
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        //admin registration
        if ($request->isMethod('post')) {
            // dd($ request->all());
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'password_confirmation' => 'required|same:password',
            ]);


            $user = new User();

            //admin registration
            if ($request->isMethod('post')) {
                // dd($ request->all());
                $request->validate([
                    'name' => 'required',
                    'email' => 'required|email',
                    'password' => 'required',
                    'password_confirmation' => 'required|same:password',
                ]);

                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $image_name = $image->getClientOriginalName();
                    $image->move(public_path('/admin/images'), $image_name);
                    $image_path = '/admin/images/' . $image_name;
                } else {
                    $image_path = '/admin/default.jpg';
                }

                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->image = $image_path;
                $user->type = 'admin';
                $saved = $user->save();
                if ($saved) {
                    return redirect('/admin/login')->with('success', 'Registration Successful');
                } else {
                    return redirect('/admin/register')->with('error', 'Registration Failed');
                }
            }
        }
        return view('admin.register');
    }

    //add new role 
    public function addRole(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);


        $role = new Role();
        $role->name = $request->name;
        $role->description = $request->description;
        $saved = $role->save();
        if ($saved) {
            return redirect()->back()->with('success', 'Role added successfully');
        } else {
            return redirect()->back()->with('error', 'Role not added');
        }
    }


    public function staff(Request $request)
    {

        $roles = Role::all();
        $staffs = Staff::with('roles')->get();


        // dd($staffs[0]->roles);

        if ($request->isMethod('post')) {
            //add new staff and use phone number as password
            $request->validate([
                'first_name' => 'required',
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email',
                'phone' => 'required|unique:staff',
                'role' => 'required',
            ]);
            // dd($request->all());
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $image->move(public_path('/admin/images'), $image_name);
                $image_path = '/admin/images/' . $image_name;
            } else {
                $image_path = '/admin/default.jpg';
            }

            try {
                $staff =  new Staff();
                $staff->first_name = $request->first_name;
                $staff->last_name = $request->last_name;
                $staff->email = $request->email;
                $staff->address = $request->address;
                $staff->phone = $request->phone;
                $staff->image = $image_path;
                $staff->role = $request->role;
                $staff->status = 'active';
                $staff->password = Hash::make($request->phone);
                $staff->save();
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Staff not added, try again');
            }
            try {
                //save staff to users table
                $user = new User();
                $user->name = $request->first_name . ' ' . $request->last_name;
                $user->email = $request->email;
                $user->password = Hash::make($request->phone);
                $user->image = $image_path;
                $user->type = 'staff';
                $user->phone = $request->phone;
                $user->address = $request->address;
                $user->role = $request->role;
                $user->status = 'active';
                $saved = $user->save();

                if ($saved) {
                    return redirect()->back()->with('success', 'Staff added successfully and staff account created successfully');
                }
            } catch (\Exception $e) {
                return redirect()->back()->with('error', ' Staff Added , but something went wrong, while creating staff account, please try again');
            }
        }
        return view('admin.staff', compact('roles', 'staffs'));
    }

    public function room(Request $request)
    {
        $services = Feature::all();
        $rooms = RoomType::all();
        // dd($rooms);
        $roomNumber = Room::with('roomType.feature')->get();
        // dd($roomNumber);

        if ($request->isMethod('post')) {
            // dd($request->all());
            $request->validate([
               'name' => 'required',
               'price' => 'required',
               'size' => 'required',
               'capacity' => 'required',
               'beds' => 'required',
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
            $room_type->features_id = $request->service_id;
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

        if ($services->count() < 1) {
            Alert::error('Please add a feature first', 'Error');
        }
        return view('admin.room', compact('services', 'rooms', 'roomNumber'));
    }

    public function roomsingle()
    {
        return view('admin.roomsingle');
    }


    public function services(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required',

            ]);
            $service = new Feature();
            $service->name = $request->name;
            $service->air_conditioner = $request->air_conditioner ? 1 : 0;
            $service->unlimited_wifi = $request->unlimited_wifi ? 1 : 0;
            $service->drinks = $request->drinks ? 1 : 0;
            $service->restaurant = $request->restaurant ? 1 : 0;
            $service->cable_tv = $request->cable_tv ? 1 : 0;
            $service->hour_front_desk = $request->hour_front_desk ? 1 : 0;
            // dd($service);
            $saved = $service->save();
            if ($saved) {
                return redirect()->back()->with('success', 'Service added successfully');
            } else {
                return redirect()->back()->with('error', 'Service not added');
            }
        }
        return view('admin.services');
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

    public function messages(Request $request)
    {
        $messages = Contact::all();
        // if($request->isMethod('post')){
        //     dd($request->all());
        // }
        return view('admin.messages', compact('messages'));
    }


    public function replyMessage(Request $request, $id)
    {

        $message = Contact::findOrfail(base64_decode($id));

        // dd(date('d-m-Y', strtotime(Carbon::now())));
        if ($request->isMethod('post')) {
            // dd($message);
            $request->validate([
                'reply_body' => 'required',
            ]);
            $saved = $message->update([
                'reply_title' => $request->reply_title,
                'status' => 1,
                'reply_body' => $request->reply_body,
                'reply_time' => date('d-m-Y', strtotime(Carbon::now())),

            ]);
            // $saved = $message->save();

            if ($saved) {

                try {
                    Mail::to($message->email)->send(new ReplyMessage($message));
                } catch (\Exception $e) {
                    return redirect()->back()->with('not-sent', 'Something went wrong while sending email, Message not sent');
                }

                return redirect()->back()->with('success', 'Message replied successfully');
            } else {
                return redirect()->back()->with('error', 'Message not replied');
            }
        }
        return view('admin.reply_message', compact('message'));
    }

    public function deleteMessage(Request $request)
    {
        $message = Contact::find(base64_decode($request->id));
        $message->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');
    }



    public function mail()
    {
        return view('mail.reply_message');
    }

    public function bookings(Request $request)
    {
        $bookings = Booking::with('room', 'roomType')->where('status', 'pending')->get();
        $room_type = RoomType::all();
        return view('admin.booking', compact('bookings', 'room_type'));
    }

    public function bookingDetails(Request $request, $id)
    {
        $booking = Booking::find(base64_decode($id))->with('room', 'roomType')->first();
        // dd($booking);

        return view('admin.booking_details', compact('booking'));
    }

    public function updateBooking(Request $request, $id)
    {
        $booking = Booking::find(base64_decode($id));
        // dd($booking);
        if ($request->isMethod('post')) {
            // $request->validate([
            //     'status' => 'required',

            // ]);
            // $room = Room::find($booking->room_id);
            // $room->update([
            //     'status' => 'booked',
            // ]);
            // dd($request->all());
         try{
                $room = Room::where('id', $booking->room_id)->update([
                    'status' => 'booked',
                ]);
                // dd($room);
         }catch(\Exception $e){
                return redirect()->back()->with('error','Something went wrong, Please try again');
            }

            try {
                $saved = $booking->update([
                    'status' => $request->status,
                    'approved_by' => Auth::user()->name,
                ]);

               
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Something went wrong while updating booking status');
            }
            if ($saved) {
                if ($request->wantsJson()) {
                    return response()->json(['success' => 'Booking status updated successfully'], 200);
                }
                return redirect()->back()->with('success', 'Booking updated successfully');
            } else {
                return redirect()->back()->with('error', 'Booking not updated, Something went wrong');
            }
        }

        // return view('admin.update_booking', compact('booking'));
    }

    public function bookingReport(Request $request)
    {
        $bookings = Booking::with('room', 'roomType')->get();
        // dd($bookings);
        return view('admin.bookings_report', compact('bookings'));
    }

    public function About(Request $request)
    {
        $abouts = About::find(1);
        // dd($abouts);
        if ($request->isMethod('post')) {
            $request->validate([
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]);
            $about = new About();
            $about->phone = $request->phone;
            $about->email = $request->email;
            $about->address = $request->address;
            $about->title = $request->title;
            $about->content = $request->content;
            $saved = $about->save();
            if ($saved) {
                return redirect()->back()->with('success', 'About added successfully');
            } else {
                return redirect()->back()->with('error', 'About not added');
            }
        }

        return view('admin.about', compact('abouts'));
    }

    public function EditAbout(Request $request)
    {
        $abouts = About::find(1);
        if ($request->isMethod('post')) {
            $request->validate([
                'phone' => 'required',
                'email' => 'required',
                'address' => 'required',
                'title' => 'required',
                'content' => 'required',
            ]);
            $saved = $abouts->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'title' => $request->title,
                'content' => $request->content,
            ]);
            if ($saved) {
                return redirect()->back()->with('success', 'About Edited successfully');
            } else {
                return redirect()->back()->with('error', 'About not Edited');
            }
        }
        return view('admin.editabout', compact('abouts'));
    }
}
