<?php

namespace App\Http\Controllers;

use App\Models\HomeHeroSection;
use App\Models\HomeSectionBoxe;
use App\Models\HomeSectionClient;
use App\Models\HomeSectionStep;
use App\Models\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index(){
//      resetAllSessions();
        $bodyClass="home";
        $hero_section=HomeHeroSection::latest()->first();
        $cv_templates=Template::where('show_in_home',1)->get();
        $clients=HomeSectionClient::all();
        $steps=HomeSectionStep::orderBy('order_column')->take(3)->get();
        $boxes=HomeSectionBoxe::take(4)->get();
        return view('home',compact('bodyClass','hero_section','cv_templates','clients','steps','boxes'));
    }
    public function setLang(Request $request){
        try{
            if(!empty($request->sel_lang)){
                return self::SetLanguageAndRedirect($request->sel_lang);
            }
        }catch (\Exception $e){
            return redirect($e->getMessage());
        }
    }
    public static function SetLanguageAndRedirect($lg){
        Session::put('applocale', $lg);
        App::setLocale($lg);
        return redirect()->back();
    }
    public function getAllTemplates(){
        $templates=Template::all();
        return view('all_templates',compact('templates'));
    }
}
