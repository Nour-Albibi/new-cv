<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\Customer;
use App\Models\LiveChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyChatController extends Controller
{
    public function chat(){
        $employees = LiveChatMessage::select('employee_id')
            ->with('employeesList')
            ->distinct('employee_id')
            ->where('employee_id','!=',NULL)
            ->where('company_id', Auth::guard('company')->user()->id)
            ->get();
        $suggestedEmployees=Customer::where('customer_type',1)->join('subscriptions','subscriptions.user_id',
            'customers.id')->where('subscriptions.status',1)->take(7)->get()->shuffle();
        return view('company-cp.chat.index',compact('employees','suggestedEmployees'));
    }
    public function loadOldMessages(Request $request){
        try{
            $employee_id=$request->employee_id;
            $employee=Customer::find($employee_id);
            $chat_messages = LiveChatMessage::select('*')
                ->where('employee_id','=',$employee_id)
                ->where('company_id', Auth::guard('company')->user()->id)
                ->get();
            return view('company-cp.chat.get_conversation',compact('chat_messages','employee','employee_id'))->render();

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function openConversation(Request $request){
        try{
            $employee_id=$request->employee_id;
            $employee=Customer::find($employee_id);
            $chat_messages = LiveChatMessage::select('*')
                ->where('employee_id','=',$employee_id)
                ->where('company_id', Auth::guard('company')->user()->id)
                ->get();
            return view('company-cp.chat.open_conversation',compact('chat_messages','employee','employee_id'));
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }
    }
    public function getSearchedContacts(Request $request){
        try{
            //email first_name last_name phone_number
            $contacts=Customer::select('*')->WithSearchKey($request->key)
                ->distinct('id')->get();
            return view('company-cp.chat.get_searched_contacts',compact('contacts'))->render();
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function broadcast(Request $request){
        $message=LiveChatMessage::create(['from_user'=>Auth::guard('company')->user()->id,
            'to_user'=>$request->to_user,'employee_id'=>$request->to_user,
            'company_id'=>Auth::guard('company')->user()->id,
            'image'=>'images/202311151852125763876_3446160035431815_6420745989722415528_n.jpg',
            'message'=>$request->get('message')]);
        broadcast(new PusherBroadcast($message))->toOthers();
        return view('company-cp.chat.broadcast',['message'=>$message]);
    }
    public function receive(Request $request){
        $message=LiveChatMessage::create(['from_user'=>8,
            'to_user'=>Auth::guard('company')->user()->id,'employee_id'=>8,
            'company_id'=>Auth::guard('company')->user()->id,
            'image'=>'images/2023111311571656750309019.jpeg',
            'message'=>$request->get('message')]);
        return view('company-cp.chat.receive',['message'=>$message]);
    }
}
