<?php

namespace App\Http\Controllers;

use App\Services\CVService;
use Illuminate\Http\Request;

class CVSkillsController extends Controller
{
    public function getSkillRelatedToJobTitle(Request $request){
        CVService::getSkillSuggestions();
    }
}
