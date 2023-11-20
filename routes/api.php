<?php

use App\Http\Controllers\CompanyChatController;
use App\Http\Controllers\CustomerChatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Customer Chats
//Route::group(['prefix' => 'customer','middleware' => 'auth:customer'],function (){
//
//});
