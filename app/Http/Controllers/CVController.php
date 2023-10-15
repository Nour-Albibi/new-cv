<?php

namespace App\Http\Controllers;

use App\Services\CVService;
use Illuminate\Http\Request;

class CVController extends Controller
{
    public function index(){
        $cvTemplates=CVService::getCVTemplates();
        return view('cv.index',compact('cvTemplates'));
    }
    public function store(Request $request){
        try{

        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()], 500);
        }
    }
}
