<?php

namespace App\Http\Controllers;

use App\Services\CVService;
use Illuminate\Http\Request;

class CVSkillsController extends Controller
{
    public function getSkillRelatedToJobTitle(Request $request){
        $related_skills=CVService::getSkillSuggestions();
        return view('cv.ajax.get_skills_suggestions',compact('related_skills'))->render();
    }
}
