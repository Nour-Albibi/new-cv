<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVEducationController extends Controller
{
    public function AddEducation(Request $request){
        try{
            $new_edu_num=$request->current_edu;
            return view('cv.ajax.add_education',compact('new_edu_num'))->render();
        }catch (\Exception $exception){}
    }
}
