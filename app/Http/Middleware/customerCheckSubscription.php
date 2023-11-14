<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class customerCheckSubscription
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
        if(!empty($request->cv)){
            //check can download this cv
            $cv=$request->cv;
            if(!empty($cv->subscription_id) && $cv->customer_id==auth()->guard('customer')->user()->id){
                return $next($request);
            }
        }
       return redirect()->back()->withErrors(['msg' => 'Error! Not Active Subscription']);
    }
}
