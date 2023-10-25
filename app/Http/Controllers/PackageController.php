<?php

namespace App\Http\Controllers;

use App\Services\PackageService;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function getCustomerPackagesPricing(){
        $available_customer_packages=PackageService::getAvailableCustomerPackages();
        return view('packages.index',compact('available_customer_packages'));
    }
    public function subscribeToPackage(Request $request){
        try{
            $request->validate(['package_id'=>'required']);
            if(PackageService::subscribeToPackage($request->package_id))
            return redirect()->route('payment.checkout');
            else abort(404);
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
