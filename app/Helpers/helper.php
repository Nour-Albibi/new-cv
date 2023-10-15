<?php
function is_home()
{
    if (\Illuminate\Support\Facades\Request::path() == '/' || \Illuminate\Support\Facades\Request::path() == 'home' || \Illuminate\Support\Facades\Request::path() == 'index') {
        return true;
    }
    return false;
}

function isContactUsPage()
{
    if (\Illuminate\Support\Facades\Request::path() == 'Contact-Us') {
        return true;
    }
    return false;
}

function isArticlePage()
{
    if (\Route::currentRouteName() == 'articles' || request()->is('Articles/show/*')) {
        return true;
    }
}

function isJobPage()
{
    if (\Route::currentRouteName() == 'jobs' || \Route::currentRouteName() == 'jobs.apply') {
        return true;
    }
}

function isProgramPage()
{

    if (\Route::currentRouteName() == 'Programs' || request()->is('Programs/*')) {
        return true;
    }
}
if (!function_exists('website_settings')) {
    function website_settings(?string $key = null)
    {
      //setting()
    }
}
if (!function_exists('setting')) {
    function setting(?string $key = null)
    {
        if (is_null($key)) {
            return app('settings');
        }
        return app('settings')[$key] ?? '';
    }
}
if (!function_exists('getAnotherLanguage')) {
function getAnotherLanguage(){
    if(app()->getLocale()=="ar"){
        return "en";
    }else{
        return "ar";
    }
}
}
if (!function_exists('getVisitorsCount')) {
    function getVisitorsCount(){
       return \App\Models\Visitor::count();
    }
}
if (!function_exists('getDashboardPublishedPostsCount')) {
    function getDashboardPublishedPostsCount(){
    }
}

if (!function_exists('getDashboardFinancingProgrammes')) {
    function getDashboardFinancingProgrammes(){
    }
}
if (!function_exists('getDashboardJobApplications')) {
    function getDashboardJobApplications(){
    }
}
