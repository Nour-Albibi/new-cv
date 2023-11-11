<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerControllers\CSubscriptionController;
use App\Http\Controllers\CustomerControllers\CustomerController;
use App\Http\Controllers\CustomerControllers\CustomerCvController;
use App\Http\Controllers\CVController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
    Route::get('/signup', [CompanyController::class, 'getSignupForm'])->name('company.register');
    Route::post('/doSignup', [CompanyController::class, 'doSignup'])->name('company.signup');
    Route::get('/login', [CompanyController::class, 'getLoginForm'])->name('company.login');
    Route::get('/logout', [CompanyController::class, 'logout'])->name('company.logout');
    Route::post('/doLogin', [AuthController::class, 'doLogin'])->name('company.doLogin');
    Route::get('/', [CompanyController::class, 'dashboard'])->name('company.dashboard');
    Route::get('/subscriptions', [CompanyController::class, 'subscriptions'])->name('company.subscriptions');
    Route::get('/subscriptions/{subscription}', [CompanyController::class, 'showsubscription'])->name('company.subscriptions.show');
    Route::get('/find-cvs', [CompanyController::class, 'CVs'])->name('company.find_cvs');
    Route::get('/views', [CompanyController::class, 'viewedmyCV'])->name('company.viewedmyCV');
    Route::get('/profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::put('/profile', [CompanyController::class, 'update_profile'])->name('company.update_profile');
    Route::get('/chat', [CompanyController::class, 'chat'])->name('company.chat');
});
