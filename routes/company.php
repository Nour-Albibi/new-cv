<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyChatController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyControllers\CompanySubscriptionController;
use App\Http\Controllers\CustomerControllers\CSubscriptionController;
use App\Http\Controllers\CustomerControllers\CustomerController;
use App\Http\Controllers\CustomerControllers\CustomerCvController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\PusherController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'language'], function () {
    Route::get('/signup', [CompanyController::class, 'getSignupForm'])->name('company.register');
    Route::post('/doSignup', [CompanyController::class, 'doSignup'])->name('company.signup');
    Route::get('/login', [CompanyController::class, 'getLoginForm'])->name('company.login');
    Route::get('/logout', [CompanyController::class, 'logout'])->name('company.logout');
    Route::post('/doLogin', [AuthController::class, 'doLogin'])->name('company.doLogin');
    Route::group(['middleware'=>'auth:company'],function() {
        Route::get('/', [CompanyController::class, 'dashboard'])->name('company.dashboard');
        Route::get('/subscriptions', [CompanySubscriptionController::class, 'subscriptions'])->name('company.subscriptions');
        Route::get('/subscriptions/create_new', [CompanySubscriptionController::class, 'create_new'])->name('company.subscriptions.create_new');
        Route::get('/subscriptions/create_and_buy', [CompanySubscriptionController::class, 'create_and_buy'])->name('company.subscriptions.create_and_buy');
        Route::post('/subscriptions/store_new', [CompanySubscriptionController::class, 'store_new'])->name('company.subscriptions.store_new');

        Route::get('/subscriptions/new', [CompanySubscriptionController::class, 'buysubscription'])->name('company.subscriptions.add');
        Route::get('/subscriptions/{subscription}', [CompanySubscriptionController::class, 'showsubscription'])->name('company.subscriptions.show');
        Route::get('preview_cv/{cv}',[CompanyController::class,'PreviewCVinPage'])->name('company.preview_cv');
        Route::get('/downloadcv/{cv}', [CompanyController::class, 'DownloadCV'])->name('company.downloadCV')->middleware('company.check_subscription');
        Route::get('/find-cvs', [CompanyController::class, 'CVs'])->name('company.find_cvs');
        Route::post('/find-cvs', [CompanyController::class, 'search'])->name('company.dofind_cvs');
        Route::get('/views', [CompanyController::class, 'viewedmyCV'])->name('company.viewedmyCV');
        Route::get('/profile', [CompanyController::class, 'profile'])->name('company.profile');
        Route::put('/profile', [CompanyController::class, 'update_profile'])->name('company.update_profile');
        //Company Chats
            Route::group(['prefix' => 'chat'], function () {
                Route::get('/', [CompanyChatController::class, 'chat'])->name('company.chat');
                Route::post('/loadOldMessages', [CompanyChatController::class, 'loadOldMessages'])->name('company.chat.loadOldMessages');
                Route::post('/getSearchedContacts', [CompanyChatController::class, 'getSearchedContacts'])->name('company.chat.getSearchedContacts');
                Route::post('/broadcast', [CompanyChatController::class, 'broadcast']);
                Route::post('/receive', [CompanyChatController::class, 'receive']);
            });
            //notifications
        Route::post('notifications/getNewCustomerMessagesNotifications',[CompanyController::class,'getNewCustomerMessagesNotifications']);
        Route::post('notifications/markAllAsRead',[CompanyController::class,'markAllAsRead'])->name('company.markAllAsRead');

    });
});
