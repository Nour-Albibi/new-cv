<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $bodyClass="home";
        return view('home',compact('bodyClass'));
    }
}
