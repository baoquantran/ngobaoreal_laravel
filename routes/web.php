<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StatusProjectController;
use App\Http\Controllers\TypepostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\baoGiaController;
use App\Http\Controllers\kyGuiController;
use App\Http\Controllers\tuVanController;




Route::get('/',[Controller::class,'index']);

Route::get('/gioi-thieu',[Controller::class,'gioithieu']);

Route::get('/bai-viet',[Controller::class,'baiviet']);

Route::get('/du-an',[Controller::class,'duan']);

Route::get('/du-an-detail',[Controller::class,'duandetail']);

Route::get('/tuyen-dung',[Controller::class,'tuyendung']);

Route::get('/lien-he',[Controller::class,'lienhe']);

Route::get('/ky-gui',[Controller::class,'kygui']);

Route::get('/lumiere-boulevard',[Controller::class,'lumiereboulevard']);

Route::get('/masterise-central-point',[Controller::class,'masterisecentralpoint']);

Route::get('/lumiere-riverside',[Controller::class,'lumimeRiverside']);

Route::get('/themarq',[Controller::class,'themarq']);

Route::get('/delasol',[Controller::class,'delasol']);


//----------------------------Dang nhap----------------------------------------------
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login_post'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout']);


//----------------------------------------admin----------------------------------
Route::group(['prefix' => 'dashboard'], function() {  
    Route::get('/',[AdminController::class,'index'])->name('dashboard');

    //----------------------------Project----------------------------------------------

    Route::resource('project',ProjectController::class);

    //----------------------------Project----------------------------------------------

    Route::resource('room',RoomController::class);

    //----------------------------status_project----------------------------------------------
    
    Route::resource('status-project',StatusProjectController::class);

    //----------------------------Type-post----------------------------------------------
    
    Route::resource('type-post',TypepostController::class);

    //----------------------------Post----------------------------------------------
    
    Route::resource('post',PostController::class);

    //----------------------------User----------------------------------------------
    
    Route::resource('user',UserController::class);




    Route::resource('baogia',baoGiaController::class);
    Route::resource('kygui',kyGuiController::class);
    Route::resource('tuvan',tuVanController::class);

});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');