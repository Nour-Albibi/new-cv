<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVProjectController extends Controller
{
    //
    public function AddProject(Request $request){
        try{
            $new_project_num=$request->current_project;
            return view('cv.ajax.add_project',compact('new_project_num'))->render();
        }catch (\Exception $exception){}
    }
}
