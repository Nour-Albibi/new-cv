<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function abdtemp(){
        // $courses =Course::where('sclass_id',$sclass)->paginate();
        // // dd($courses);

        // return view('admin.course.index', compact('sclass','courses'))
        //     ->with('i', (request()->input('page', 1) - 1) * $courses->perPage());

        return view('customer-cp.pages.home');
    }
}
