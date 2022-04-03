<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);
            $data = $request->all();
            $user = User::where('email', $data['email'])->first();
            if ($user) {
                if (Hash::check($data['password'], $user->password)) {
                    Auth::login($user);
                    $request->session()->put('user', $user);
                    return redirect()->route('dashboard');
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
        $staffs = Staff::with('role')->get();
        // dd($staffs->filter->relationLoaded('make')->isEmpty()); 
    
        // $staffs = Staff::with('role')->get();
        dd($staffs);

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

}
