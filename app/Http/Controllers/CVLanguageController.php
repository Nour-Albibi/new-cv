<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVLanguageController extends Controller
{
    public function AddLanguage(Request $request){
        try{
            $new_language_num=$request->current_language;
            return view('cv.ajax.add_language',compact('new_language_num'))->render();
        }catch (\Exception $exception){}
    }
}
