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
        '/broadcasting/auth',
        'cv-builder/AddNewWorkHistory',
        'cv-builder/AddProject',
        'cv-builder/AddEducation',
        'cv-builder/AddCourse',
        'cv-builder/AddLanguage',
        'cv-builder/uploadFile',
        'cv-builder/getSkillsRelatedToJobTitle',
        'cv-builder/PreviewCV',
        'cv-builder/getCVCard',
        'cv-builder/PreviewCVNew',
        'company/chat/loadOldMessages',
        'company/chat/getSearchedContacts',
        'customer/chat/loadOldMessages',
        'customer/chat/getSearchedContacts'
    ];
}
