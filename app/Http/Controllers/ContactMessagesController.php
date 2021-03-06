<?php

namespace App\Http\Controllers;

use App\Mail\ReplyMessage;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ContactMessagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except([
            'login', 'register'
        ]);
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
        if (Auth::user()->type !== 'admin') {
            return redirect()->back()->with('error', 'You are not Authorized to carry out this action , be careful I will report you to admin if you it again');
        }
        $message = Contact::find(base64_decode($request->id));
        $message->delete();
        return redirect()->back()->with('success', 'Message deleted successfully');
    }

}
