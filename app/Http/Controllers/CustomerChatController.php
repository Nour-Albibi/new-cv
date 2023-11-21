<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use App\Models\Customer;
use App\Models\LiveChatMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerChatController extends Controller
{
    public function chat(){
        $companies = LiveChatMessage::select('company_id')
            ->with('companyList')
            ->distinct('company_id')
            ->where('company_id','!=',NULL)
            ->where('employee_id', Auth::guard('customer')->user()->id)
            ->get();
        $suggestedCompanies=Customer::select('customers.*')
        ->where('customer_type',2)->join('subscriptions','subscriptions.user_id',
            'customers.id')->where('subscriptions.status',1)->take(7)->get()->shuffle();
        return view('customer-cp.chat.index',compact('companies','suggestedCompanies'));
    }
    public function loadOldMessages(Request $request){
        try{
            $company_id=$request->company_id;
            $company=Customer::find($company_id);
            $chat_messages = LiveChatMessage::select('*')
                ->where('company_id','=',$company_id)
                ->where('employee_id', Auth::guard('customer')->user()->id)
                ->get();
            return view('customer-cp.chat.get_conversation',compact('chat_messages','company','company_id'))->render();

        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function openConversation(Request $request){
        try{
            $company_id=$request->company_id;
            $company=Customer::find($company_id);
            $chat_messages = LiveChatMessage::select('*')
                ->where('company_id','=',$company_id)
                ->where('employee_id', Auth::guard('customer')->user()->id)
                ->get();
            return view('customer-cp.chat.open_conversation',compact('chat_messages','company','company_id'));
        }catch (\Exception $exception){
            return redirect()->back()->withErrors(['msg' =>$exception->getMessage()]);
        }
    }
    public function getSearchedContacts(Request $request){
        try{
            //email first_name last_name phone_number
            $contacts=Customer::select('*')->WithSearchKey($request->key)
                ->distinct('id')->get();
            return view('customer-cp.chat.get_searched_contacts',compact('contacts'))->render();
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
    public function broadcast(Request $request){
       $message=LiveChatMessage::create(['from_user'=>Auth::guard('customer')->user()->id,
            'to_user'=>11,'employee_id'=>Auth::guard('customer')->user()->id,
            'company_id'=>11,'image'=>'images/2023111311571656750309019.jpeg','message'=>$request->get('message')]
       );
        broadcast(new PusherBroadcast($message))->toOthers();

        return view('customer-cp.chat.broadcast',['message'=>$message]);
    }
    public function receive(Request $request){
        $message=LiveChatMessage::create(['from_user'=>11,
            'to_user'=>Auth::guard('customer')->user()->id,'employee_id'=>Auth::guard('customer')->user()->id,
            'company_id'=>11,
            'image'=>'images/202311151852125763876_3446160035431815_6420745989722415528_n.jpg',
            'message'=>$request->get('message')]);
        return view('customer-cp.chat.receive',['message'=>$message]);
    }
}
