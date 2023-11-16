<?php

namespace App\Http\Controllers\CompanyControllers;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use App\Services\CustomerService;
use Illuminate\Support\Facades\Auth;

class CompanySubscriptionController extends Controller
{
    public function subscriptions(){
        $user_id= Auth::guard('company')->user()->id;
        $canSubscribeToNewPackage=CustomerService::canSubscribeToNewCompanyPackage();
        $subscriptions =Subscription::where('user_id',$user_id)->where('package_type','2')->orderBy('start_date','desc')
        ->paginate();
        return view('company-cp.subscriptions.subscriptions',compact('subscriptions','canSubscribeToNewPackage'))->with('i', (request()->input('page', 1) - 1) * $subscriptions->perPage());
    }

    public function showsubscription(Subscription $subscription)
    {
        $user_id= Auth::guard('company')->user()->id;
        //dd ($user_id);
        return view('company-cp.subscriptions.show',compact('subscription'));
    }

    public function newsubscription()
     {
        $user_id= Auth::guard('company')->user()->id;
        $packages =Package::where('type','1')->get();
        return view('company-cp.subscriptions.new',compact('packages'));

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
}
}
