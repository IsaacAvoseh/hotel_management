<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMessage;
use App\Models\Contact;
use App\Models\Role;
use App\Models\Room;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Staff;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

class DashBoardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     
     */
        public function __construct()
        {
            $this->middleware('auth')->except(['login', 'register'
            ]);
        }

        public function Admin()
        {
                    
            return view('admin.index');
        }

        public function login(Request $request)
        {

            //admin login
            if ($request->isMethod('post')) {
                $cred = $request->validate([
                    'email' => 'required',
                    'password' => 'required',
                ]);
                $data = $request->all();
                $user = User::where('email', $data['email'])->first();
                if ($user) {
                    if (Hash::check($data['password'], $user->password)) {
                        Auth::login($user);
                        $request->session()->put('user', $user);
                        return redirect()->route('dashboard')->with('success', 'Admin successfully logged in');
                    } else {
                        return redirect()->back()->with('error', 'Invalid password');
                    }
                } else {
                    $staff = Staff::where('email', $data['email'])->first();
                    if($staff){
                      if (Auth::guard('webstaff')->attempt($cred)) {
                        //     $request->session()->put('staff', $staff);
                        //     return redirect()->route('staff.dashboard')->with('success', 'Staff successfully logged in');
                        // } else {
                        //     return redirect()->back()->with('error', 'Invalid password');
                        // }
                        
                        // Auth::login($staff);
                        dd(Auth::user());
                        $request->session()->put('staff', $staff);
                        return redirect()->route('dashboard');
                    }else{
                        return redirect()->back()->with('error', 'Invalid password');
                    }
                }else{
                    
                    return redirect()->back()->with('error', 'Invalid email');
                }
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

            // if ($request->session()->has('user')) {
            //     return view('dashboard');
            // } else {
            //     return redirect('/admin/login');
            // }

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

                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $image_name = $image->getClientOriginalName();
                    $image->move(public_path('/admin/images'), $image_name);
                    $image_path = 'admin/images/' . $image_name;
                } else {
                    $image_path = '/admin/default.jpg';
                }

                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make($request->password);
                $user->image = $image_path;
                $saved = $user->save();
                if ($saved) {
                    return redirect('/admin/login')->with('success', 'Registration Successful');
                } else {
                    return redirect('/admin/register')->with('error', 'Registration Failed');
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
            // dd($staffs->filter->relationLoaded('make')->isEmpty()); 

            // dd($staffs[0]->roles);

        if($request->isMethod('post')){
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
                    $image_path = '/admin/images/'.$image_name;
                } else {
                    $image_path = '/admin/default.jpg';
                }

                $staff =  new Staff();
                    $staff->first_name = $request->first_name;
                    $staff->last_name = $request->last_name;
                    $staff->email = $request->email;
                    $staff->address = $request->address;
                    $staff->phone = $request->phone;
                    $staff->image = $image_path;
                    $staff->role = $request->role;
                    $staff->password = Hash::make($request->phone);
                    $saved = $staff->save();
                    if ($saved) {
                        return redirect()->back()->with('success', 'Staff added successfully');
                    } else {
                        return redirect()->back()->with('error', 'Staff not added');
                    }

        }
        return view('admin.staff', compact('roles', 'staffs'));
    }

    public function room(Request $request){
        $services = Service::all();

        if ($request -> isMethod('post')) {
            // dd($request->all());
           
            $room_type = new RoomType();
            $room_type->name = $request->name;
            $room_type->price = $request->price;
            $room_type->size = $request->size;
            $room_type->capacity = $request->capacity;
            $room_type->bed = $request->bed;
            $room_type->no_of_rooms = $request->no_of_rooms;
            

            if($request->hasFile('image')){
                $image = $request->file('image');
                $image_name = $image->getClientOriginalName();
                $image->move(public_path('/admin/rooms'), $image_name);
                $image_path = '/admin/rooms/'.$image_name;
            }else{
                $image_path = '/admin/room.jpg';
            }
            if($request->hasFile('image_1')){
                $image1 = $request->file('image_1');
                $image_name1 = $image1->getClientOriginalName();
                $image1->move(public_path('/admin/rooms'), $image_name1);
                $image_path1 = '/admin/rooms/'.$image_name1;
            }else{
                $image_path1 = '/admin/room.jpg';
            }
            if($request->hasFile('image_2')){
                $image2 = $request->file('image_2');
                $image_name2 = $image2->getClientOriginalName();
                $image2->move(public_path('/admin/rooms'), $image_name2);
                $image_path2 = '/admin/rooms/'.$image_name2;
            }else{
                $image_path2 = '/admin/room.jpg';
            }
            if($request->hasFile('image_3')){
                $image3 = $request->file('image_3');
                $image_name3 = $image3->getClientOriginalName();
                $image3->move(public_path('/admin/rooms'), $image_name3);
                $image_path3 = '/admin/rooms/'.$image_name3;
            }else{
                $image_path3 = '/admin/room.jpg';
            }
            if($request->hasFile('image_4')){
                $image4 = $request->file('image_4');
                $image_name4 = $image4->getClientOriginalName();
                $image4->move(public_path('/admin/rooms'), $image_name4);
                $image_path4 = '/admin/rooms/'.$image_name4;
            }else{
                $image_path4 = '/admin/room.jpg';
            }

            $room_type->image = $image_path;
            $room_type->image_1 = $image_path1;
            $room_type->image_2 = $image_path2;
            $room_type->image_3 = $image_path3;
            $room_type->image_4 = $image_path4;
            $room_type->service_id = $request->service;
            $saved = RoomType::create($room_type->toArray());
            if ($saved['id']) {
                // dd($saved['id']);
                //save list of room to table rooms depending on the number of $request->no_of_rooms entered, if $request->no_of_rooms is 10 , save 10 rooms to database

                $room = new Room();

                for ($i = 0; $i < number_format($room_type->no_of_rooms); $i++){
                    $room->name = 'Room'.$i+1;
                    $room->room_type_id = $saved['id'];
                    $saved1 = $room->save();
                }
                if($saved1){

                    return redirect()->back()->with('success', 'Room added successfully');
                }else{
                    return back()->with('error', 'Something went wrong while adding Room');
                }

            } else {
                return redirect()->back()->with('error', 'Something went wrong, Please try again');
            }
           
        }

        return view('admin.room', compact('services'));
    }

    public function roomsingle(){
        return view('admin.roomsingle');
    }


    public function services(Request $request){
        if($request->isMethod('post')){
            $request->validate([
                'name' => 'required',
                
            ]);
            $service = new Service();
            $service->name = $request->name;
            $service->air_conditioner = $request->air_conditioner?1:0;
            $service->unlimited_wifi = $request->unlimited_wifi?1:0;
            $service->drinks = $request->drinks?1:0;
            $service->restaurant = $request->restaurant?1:0;
            $service->cable_tv = $request->cable_tv?1:0;
            $service->hour_front_desk = $request->hour_front_desk?1:0;
            // dd($service);
            $saved = $service->save();
            if($saved){
                return redirect()->back()->with('success', 'Service added successfully');
            }else{
                return redirect()->back()->with('error', 'Service not added');
            }
        }
        return view('admin.services');
    }

    public function addRoomFeatures (Request $request) {
            $request->validate([
            'name' => 'required',
            'service_id' => 'required',
            ]);

        $roomFeatures = new RoomType();
        $roomFeatures->name = $request->name;
        $roomFeatures->service_id = $request->service_id;
        $saved = $roomFeatures->save();
        if ($saved) {
            return redirect()->back()->with('success', 'Room Type added successfully');
        } else {
            return redirect()->back()->with('error', 'Room Type not added');
        }       
    }

    public function messages(Request $request){
        $messages = Contact::all();
        // if($request->isMethod('post')){
        //     dd($request->all());
        // }
        return view('admin.messages', compact('messages'));
    }


    public function replyMessage(Request $request, $id){
        $message = Contact::find(base64_decode($id));
        // dd(date('d-m-Y', strtotime(Carbon::now())));
        if($request->isMethod('post')){
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
            $saved = $message->save();

            if($saved){
                Mail::to($message->email)->send(new ReplyMessage($message));
                return redirect()->back()->with('success', 'Message replied successfully');
            }else{
                return redirect()->back()->with('error', 'Message not replied');
            }
        }
        return view('admin.reply_message', compact('message'));
    }

    public function deleteMessage(Request $request){
        $message = Contact::find(base64_decode($request->id));
        $message->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');
    }

    public function mail(){
        return view('mail.reply_message');
    }

    public function bookings(Request $request){
        
        return view('admin.booking');
    }

    
}
