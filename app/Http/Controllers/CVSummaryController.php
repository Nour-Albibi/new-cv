<?php

namespace App\Http\Controllers;

use App\Services\CVService;
use Illuminate\Http\Request;

class CVSummaryController extends Controller
{
    //
    public function getAllSummariesRelatedToJobTitle(Request $request){
        $related_summaries=CVService::getSummariesSuggestions($request->all());
        return view('cv.ajax.get_summaries_suggestions',compact('related_summaries'))->render();
    }
}
