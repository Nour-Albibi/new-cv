<?php

namespace App\Http\Controllers\CustomerControllers;

use App\Http\Controllers\Controller;
use App\Models\CustomerCv;
use Illuminate\Support\Facades\Auth;

class CustomerCvController extends Controller
{
    public function cvs()
    {
        $user_id=Auth::guard('customer')->user()->id;
        //dd ($user_id);
        $cvs =CustomerCv::where('customer_id',$user_id)->paginate();
        // dd($cvs);
        return view('customer-cp.cvs.index',compact('cvs'))->with('i', (request()->input('page', 1) - 1) * $cvs->perPage());

   }

}
