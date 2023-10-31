<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\CVCourseController;
use App\Http\Controllers\CVEducationController;
use App\Http\Controllers\CVLanguageController;
use App\Http\Controllers\CVProjectController;
use App\Http\Controllers\CVSkillsController;
use App\Http\Controllers\CVSummaryController;
use App\Http\Controllers\CVWorkHistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'language'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home_page');
    Route::get('/home', [HomeController::class, 'index']);

    Route::group(['prefix' => 'cv-builder'], function () {
        Route::match(['post','get'],'/',[CVController::class,'index'])->name('cv.start');
        Route::post('create',[CVController::class,'create'])->name('cv.create');
        Route::get('/create',[CVController::class,'create']);
        Route::post('/create_new',[CVController::class,'resetDataAndCreateNewCV'])->name('cv.resetDataAndCreateNewCV');
        Route::post('uploadFile',[CVController::class,'uploadFile'])->name('cv.upload');
        Route::post('saveCV',[CVController::class,'store'])->name('cv.store');
        Route::post('FinaliseCVApplication',[CVController::class,'FinaliseCVApplication'])->name('FinaliseCVApplication');
        Route::post('saveFirstStepData',[CVController::class,'storeFirstStepDataBeforeLogin'])->name('cv.storeFirstStepData');
        Route::post('AddNewWorkHistory',[CVWorkHistoryController::class,'AddNewWorkHistory']);
        Route::post('AddProject',[CVProjectController::class,'AddProject']);
        Route::post('AddEducation',[CVEducationController::class,'AddEducation']);
        Route::post('AddCourse',[CVCourseController::class,'AddCourse']);
        Route::post('AddLanguage',[CVLanguageController::class,'AddLanguage']);
        Route::post('getSkillsRelatedToJobTitle',[CVSkillsController::class,'getSkillRelatedToJobTitle']);
        Route::post('getAllSummariesRelatedToJobTitle',[CVSummaryController::class,'getAllSummariesRelatedToJobTitle']);
        Route::get('DownloadCV/{cv}',[CVController::class,'DownloadCV']);
    });
    Route::group(['prefix' => 'payment'], function () {
        Route::get('plans', [PackageController::class, 'getCustomerPackagesPricing'])->name('getCustomerPackagesPricing');
        Route::post('subscribeToPackage', [PackageController::class, 'subscribeToPackage'])->name('subscribeToPackage');
        Route::match(['post','get'],'checkout',[PaymentController::class,'checkout'])->name('payment.checkout');
        Route::get('Confirmation',[PaymentController::class,'order_confirmed'])->name('order_confirmed');
    });
});
