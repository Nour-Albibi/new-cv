<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class CVLanguageController extends Controller
{
    public function AddLanguage(Request $request){
        try{
            $new_language_num=$request->current_language;
            $alanguages=Language::all();
            return view('cv.ajax.add_language',compact('new_language_num','alanguages'))->render();
        }catch (\Exception $exception){}
    }
}
