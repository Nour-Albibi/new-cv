<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class CVEducationController extends Controller
{
    public function AddEducation(Request $request){
        try{
            $new_edu_num=$request->current_edu;
            $qualifications=Qualification::all();
            return view('cv.ajax.add_education',compact('new_edu_num','qualifications'))->render();
        }catch (\Exception $exception){}
    }
}
