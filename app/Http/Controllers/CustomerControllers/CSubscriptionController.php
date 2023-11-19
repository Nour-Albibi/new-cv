<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Models\Package;
use App\Models\Subscription;
use App\Services\CustomerService;
use App\Services\PackageService;
use App\Services\PaymentService;
use App\Services\SubscriptionService;
use Encore\Admin\Controllers\AdminController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CSubscriptionController extends AdminController
{

    public function subscriptions()
     {
        $user_id= Auth::guard('customer')->user()->id;
        $canSubscribeToNewPackage=CustomerService::canSubscribeToNewPackage();
        $subscriptions =Subscription::where('user_id',$user_id)->where('package_type','1')->orderBy('start_date','desc')->paginate();
        return view('customer-cp.subscriptions.index',compact('subscriptions','canSubscribeToNewPackage'))->with('i', (request()->input('page', 1) - 1) * $subscriptions->perPage());
    }

    public function showsubscription(Subscription $subscription)
    {
        $user_id= Auth::guard('customer')->user()->id;
        //dd ($user_id);
        return view('customer-cp.subscriptions.show',compact('subscription'));
    }

    public function newsubscription()
     {
        $user_id= Auth::guard('customer')->user()->id;
        $packages =Package::where('type','1')->get();
        return view('customer-cp.subscriptions.new',compact('packages'));

    }
    public function buysubscription(Package $package)
     {
        try{
            if ($package){

                if(PackageService::subscribeToPackage($package->id))
                return redirect()->route('payment.checkout');
            else abort(404);
        }
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
        // return view('customer-cp.subscriptions.new',compact('packages'));
    }
    public function create_new(){
        $customerPackages=Package::where('type',1)->get();
        return view('customer-cp.subscriptions.create',compact('customerPackages'));
    }
    public static function store_new(Request $request){
        try{
            if(SubscriptionService::subscribe_new($request->all())){
                return redirect()->route('order_confirmed');
            }
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
