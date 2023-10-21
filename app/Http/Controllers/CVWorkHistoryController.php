<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVWorkHistoryController extends Controller
{
    //
    public function AddNewWorkHistory(Request $request){
        try{
            $new_work_num=$request->current_workExperience;
            return view('cv.ajax.add_work_experience',compact('new_work_num'))->render();
        }catch (\Exception $exception){}

    }
}
