<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('settings', function () {

            return Cache::rememberForever('site_settings', function () {
                $siteSetting=SiteSetting::select('name_ar', 'name_en','logo','slogan_ar','slogan_en',
                    'company_email','company_phone1','address_ar','address_en','facebook_link','twitter_link','linkedin_link')->first();
                if($siteSetting!=null) return $siteSetting->toArray();
            });
        });
    }
}
