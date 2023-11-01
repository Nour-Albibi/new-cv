<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'cv-builder/AddNewWorkHistory',
        'cv-builder/AddProject',
        'cv-builder/AddEducation',
        'cv-builder/AddCourse',
        'cv-builder/AddLanguage',
        'cv-builder/uploadFile',
        'cv-builder/getSkillsRelatedToJobTitle',
        'cv-builder/PreviewCV'
    ];
}
