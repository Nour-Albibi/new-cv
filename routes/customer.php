<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerChatController;
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
    Route::group(['middleware'=>'auth:customer'],function(){
        Route::get('/', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        Route::get('/subscriptions', [CSubscriptionController::class, 'subscriptions'])->name('customer.subscriptions');
        Route::get('/subscriptions/new', [CSubscriptionController::class, 'newsubscription'])->name('customer.subscriptions.add');
        Route::get('/subscriptions/create_new', [CSubscriptionController::class, 'create_new'])->name('customer.subscriptions.create_new');
        Route::post('/subscriptions/store_new', [CSubscriptionController::class, 'store_new'])->name('customer.subscriptions.store_new');
        Route::get('/subscriptions/new/{package}', [CSubscriptionController::class, 'buysubscription'])->name('customer.subscriptions.buy');
        Route::get('/subscriptions/{subscription}', [CSubscriptionController::class, 'showsubscription'])->name('customer.subscriptions.show');
        Route::get('/cvs', [CustomerCvController::class, 'CVs'])->name('customer.CVs');
        Route::get('/downloadcv/{cv}', [CVController::class, 'DownloadCV'])->name('customer.downloadCV')->middleware('customer.check_subscription');
        Route::get('preview_cv/{cv}',[CustomerCvController::class,'PreviewCVinPage'])->name('customer.preview_cv');
        Route::get('/views', [CustomerController::class, 'viewedmyCV'])->name('customer.viewedmyCV');
        Route::get('/profile', [CustomerController::class, 'profile'])->name('customer.myprofile');
        Route::put('/profile', [CustomerController::class, 'update_profile'])->name('customer.update_profile');
        Route::get('/editCv/{cv}', [CVController::class, 'editCV'])->name('customer.editCV');
        Route::group(['prefix' => 'chat'], function () {
            Route::get('/', [CustomerChatController::class, 'chat'])->name('customer.chat');
            Route::post('/loadOldMessages', [CustomerChatController::class, 'loadOldMessages'])->name('customer.chat.loadOldMessages');
            Route::post('/getSearchedContacts', [CustomerChatController::class, 'getSearchedContacts'])->name('customer.chat.getSearchedContacts');
            Route::post('/broadcast', [CustomerChatController::class, 'broadcast']);
            Route::post('/receive', [CustomerChatController::class, 'receive']);
            Route::any('pusher/auth',[CustomerChatController::class,'pusher_auth'])->name('customer.pusher.auth');
        });
    });
});
