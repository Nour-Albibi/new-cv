<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerControllers\CSubscriptionController;
use App\Http\Controllers\CustomerControllers\CustomerController;
use App\Http\Controllers\CustomerControllers\CustomerCvController;
use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
        Route::get('/signup', [AuthController::class, 'getSignupForm'])->name('customer.register');
        Route::post('/doSignup', [AuthController::class, 'doSignup'])->name('customer.signup');
        Route::get('/login', [AuthController::class, 'getLoginForm'])->name('customer.login');
        Route::get('/logout', [AuthController::class, 'logout'])->name('customer.logout');
        Route::post('/doLogin', [AuthController::class, 'doLogin'])->name('customer.doLogin');
        Route::get('/', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('/subscriptions', [CSubscriptionController::class, 'subscriptions'])->name('customer.subscriptions');
        Route::get('/subscriptions/{subscription}', [CSubscriptionController::class, 'showsubscription'])->name('customer.subscriptions.show');
        Route::get('/subscriptions/new', [CSubscriptionController::class, ''])->name('customer.subscriptions.add');
        Route::get('/cvs', [CustomerCvController::class, 'CVs'])->name('customer.CVs');
        Route::get('/downloadcv/{cv}', [CVController::class, 'DownloadCV'])->name('customer.downloadCV');
        Route::get('/views', [CustomerController::class, 'viewedmyCV'])->name('customer.viewedmyCV');
        Route::get('/profile', [CustomerController::class, 'profile'])->name('customer.myprofile');
        Route::put('/profile', [CustomerController::class, 'update_profile'])->name('customer.update_profile');
});
