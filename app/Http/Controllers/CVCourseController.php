<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVCourseController extends Controller
{
    public function AddCourse(Request $request){
        try{
            $new_course_num=$request->current_course;
            return view('cv.ajax.add_course',compact('new_course_num'))->render();
        }catch (\Exception $exception){}
    }
}
