<?php

use App\Http\Controllers\CVController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home_page');
Route::group(['middleware' => 'language'], function () {
    Route::group(['prefix' => 'cv-builder'], function () {
        Route::get('/',[CVController::class,'index']);
        Route::get('/create',[CVController::class,'create']);
        Route::post('saveCV',[CVController::class,'store'])->name('cv.store');
    });
});
