<?php

namespace App\Services;

use App\Models\Template;

class CVTemplateService
{
    public static function getChosenTemplate(){
        $chosen_template_id = session('chosen_template_id') ?? 1;
        return Template::findOrFail($chosen_template_id);
    }
}
