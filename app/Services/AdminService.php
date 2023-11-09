<?php

namespace App\Services;


class AdminService
{
    public static function isAdministrator()
    {
        return \Admin::user()->isAdministrator() || \Admin::user()->isRole('super-admin') || \Admin::user()->isRole('admin');
    }

    public static function isSuperAdmin()
    {
        return \Admin::user()->isAdministrator() || \Admin::user()->isRole('super-admin');
    }
}
