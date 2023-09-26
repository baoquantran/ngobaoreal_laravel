<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;




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





//----------------------------------------admin----------------------------------
Route::group(['prefix' => 'dashboard'], function() {  
    Route::get('/',[AdminController::class,'index']);


    //----------------------------Projecr----------------------------------------------

    Route::resource('project',ProjectController::class);

    //----------------------------Post----------------------------------------------
    
    Route::resource('post',PostController::class);

    //----------------------------User----------------------------------------------
    
    Route::resource('user',UserController::class);
});


Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');