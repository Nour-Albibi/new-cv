<?php

namespace App\Http\Controllers;

use App\Models\HomeHeroSection;
use App\Models\HomeSectionBoxe;
use App\Models\HomeSectionClient;
use App\Models\HomeSectionStep;
use App\Models\Template;
use Illuminate\Http\Request;

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
}
