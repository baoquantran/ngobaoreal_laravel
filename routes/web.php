<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[Controller::class,'index']);
Route::get('/gioi-thieu',[Controller::class,'gioithieu']);
Route::get('/bai-viet',[Controller::class,'baiviet']);
Route::get('/du-an',[Controller::class,'duan']);
Route::get('/du-an-detail',[Controller::class,'duan-detail']);
Route::get('/tuyen-dung',[Controller::class,'tuyendung']);
Route::get('/lien-he',[Controller::class,'lienhe']);
Route::get('/ky-gui',[Controller::class,'kygui']);
Route::get('/lumiere-boulevard',[Controller::class,'lumiereboulevard']);
Route::get('/masterise-central-point',[Controller::class,'masterisecentralpoint']);
Route::get('/lumiere-riverside',[Controller::class,'lumimeRiverside']);
Route::get('/themarq',[Controller::class,'themarq']);
Route::get('/delasol',[Controller::class,'delasol']);


//----------------------------------------admin----------------------------------
Route::group(['prefix' => 'dashboard'], function() {  
    Route::get('/',[AdminController::class,'index']);
});