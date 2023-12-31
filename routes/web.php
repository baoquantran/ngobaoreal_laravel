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




Route::get('/',[Controller::class,'index'])->name('/');
// Route::post('/',[baoGiaController::class,'baogia_'])->name('baogia');
Route::post('/search',[Controller::class,'search'])->name('search');

Route::get('/gioi-thieu',[Controller::class,'gioithieu']);

Route::get('/bai-viet/{cate_post}',[Controller::class,'baiviet'])->name('post');
Route::get('/bai-viet-ngobaoreal',[Controller::class,'baiviets'])->name('posts');

Route::get('/postdetail/{cate_post}/{post_slug}',[Controller::class,'baivietdetail'])->name('post_detail');

Route::get('/du-an',[Controller::class,'duan']);

Route::get('/du-an-detail/{pro_slug}',[Controller::class,'duandetail'])->name('project_detail');

Route::get('/tuyen-dung',[Controller::class,'tuyendung']);

Route::get('/lien-he',[Controller::class,'lienhe'])->name('lien-he');

Route::get('/ky-gui',[Controller::class,'kygui']);




//----------------------------Dang nhap----------------------------------------------
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'login_post'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout']);


//----------------------------------------admin----------------------------------
Route::group(['prefix' => 'dashboard','middleware' => 'checkadmin'], function() {  
    Route::get('/',[AdminController::class,'index'])->name('dashboard');

    //----------------------------Project----------------------------------------------

    Route::resource('project',ProjectController::class)->middleware('adminauth');

    //----------------------------Project----------------------------------------------

    Route::resource('room',RoomController::class)->middleware('adminauth');

    //----------------------------status_project----------------------------------------------
    
    Route::resource('status-project', StatusProjectController::class)->middleware('adminauth');

    //----------------------------Type-post----------------------------------------------
    
    Route::resource('type-post',TypepostController::class);

    //----------------------------Post----------------------------------------------
    
    Route::resource('post',PostController::class);

    //----------------------------User----------------------------------------------
    
    Route::resource('user',UserController::class)->middleware('adminauth');



    Route::resource('baogia',baoGiaController::class)->names([
        'index' => 'baogia.index',
        'create' => 'baogia.create',
        'store' => 'baogia.store',
        'show' => 'baogia.show',
        'edit' => 'baogia.edit',
        'update' => 'baogia.update',
        'destroy' => 'baogia.destroy',
    ])->middleware('adminauth');
    Route::patch('/baogia/{id}/check',[baoGiaController::class, 'check'])->name('baogia.check')->middleware('adminauth');

    Route::resource('kygui',kyGuiController::class)->names([
        'index' => 'kygui.index',
        'create' => 'kygui.create',
        'store' => 'kygui.store',
        'show' => 'kygui.show',
        'edit' => 'kygui.edit',
        'update' => 'kygui.update',
        'destroy' => 'kygui.destroy',
    ])->middleware('adminauth');
    Route::patch('/kygui/{id}/check',[kyGuiController::class, 'check'])->name('kygui.check');

    Route::resource('tuvan',tuVanController::class)->names([
        'index' => 'tuvan.index',
        'create' => 'tuvan.create',
        'store' => 'tuvan.store',
        'show' => 'tuvan.show',
        'edit' => 'tuvan.edit',
        'update' => 'tuvan.update',
        'destroy' => 'tuvan.destroy',
    ])->middleware('adminauth');
    Route::patch('/tuvan/{id}/check',[tuVanController::class, 'check'])->name('tuvan.check')->middleware('adminauth');


});

Route::any('/ckfinder/connector', '\CKSource\CKFinderBridge\Controller\CKFinderController@requestAction')
    ->name('ckfinder_connector');

Route::any('/ckfinder/browser', '\CKSource\CKFinderBridge\Controller\CKFinderController@browserAction')
    ->name('ckfinder_browser');