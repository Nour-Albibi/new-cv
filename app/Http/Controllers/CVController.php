<?php

namespace App\Http\Controllers;

use App\Services\CVService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Jackiedo\Cart\Facades\Cart;

class CVController extends Controller
{
    public function index(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'cvColor' => ['string', 'max:255'],
                'cvTemplate' => ['required'],
            ]);
            Session::put(['chosen_template_id'=>$request->cvTemplate,'chosen_cv_color'=>$request->cvColor]);
            return view('cv.start2');
        }else{
            $cvTemplates=CVService::getCVTemplates();
            return view('cv.index',compact('cvTemplates'));
        }
    }
    public function create(Request $request){
        if ($request->isMethod('post')) {
            $request->validate([
                'cv_language' => ['required'],
            ]);
            Session::put('chosen_cv_language',$request->cv_language);
        }
        return view('cv.create-cv-steps');
    }
    public function store(Request $request){
        try{
            if($request->step!=null){
                $data=$request->all();
                $step_num=$request->step;
                $validator=self::ValidateFormDataBasedOnStepNumber($step_num,$data);
                if (!empty($validator) && $validator->fails()) {
                    return false;
                }
                return CVService::storeCVData($step_num,$data);
            }else{
                return false;
            }
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
    public static function ValidateFormDataBasedOnStepNumber($step_num,$data){
        switch ($step_num){
            case 0:
                return Validator::make($data, [
                    'first_name' => 'required|string|min:2|max:255',
                    'surename' => 'required|string|min:2|max:255',
                    'phone' => 'required|string|min:6|max:255',
                    'email' => 'string|email|max:255',
                ]);
            case 1:
                return null;
            default:
                return null;
        }

    }
}
