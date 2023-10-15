<?php

namespace App\Services;
use App\Models\Template;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
class CVService
{
    public static function getCVTemplates(){
        return Template::all();
    }
}
