<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\UsersMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index(){;
        return view('contact_us');
    }
    public function sendEmail(Request $request){
        try{
            $data = $request->only('full_name','phone_number','email','subject',  'message');
            $validator = Validator::make($data, [
                'full_name' => 'required|min:4|max:30|string',
                'email' => 'email',
                'phone_number' => 'required|min:8|max:12|string',
                'subject'=>'min:3|max:200|string',
                'message' => 'required|min:6|max:300'
            ]);
            if ($validator->fails()) {
                return Redirect::back()->withErrors([$validator->getMessageBag()]);
            }
            $message=$request->message;
            Mail::to('nour.albibi9@gmail.com')->send(new ContactEmail([
                'full_name'=>$request->full_name,
                'phone_number'=>$request->phone_number,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message' => $message
            ]));
            UsersMessage::create(['full_name'=>$request->full_name,
                'phone_number'=>$request->phone_number,
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message' => $message]);
            $msg=__('Thank you, your message has been sent successfully');
            return back()->with(['msg' => $msg]);
        }
        catch (\Exception $e){
            //show error message
            return back()->withErrors([$e->getMessage()]);
        }
    }
}
