<?php

namespace App\Composers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class CompanyCPComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    // protected $rest;

    /**
     * Create a new profile composer.
     *
     * @param UserRepository $users
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Bind data to the view.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $user = Auth::guard('company')->user();
        if($user){
            $notifications = $user->unreadNotifications->whereIn('type', ['App\Notifications\NewCustomerMessage']);
            $view->with(['notifications'=>$notifications]);
        }
    }
}
