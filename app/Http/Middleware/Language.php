<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('applocale')) {
            App::setLocale(Session::get('applocale'));
        }
        $lang=App::getLocale();
        if($lang=="en"){
            $direction="ltr";
        }else{
            $direction="rtl";
        }
        View::share(['lang' => $lang,'direction'=>$direction]);
        return $next($request);
    }
}
