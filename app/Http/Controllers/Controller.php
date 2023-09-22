<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function index(){
        return view('user.index');
    }
    function gioithieu(){
        return view('user.about');
    }
    function baiviet(){
        return view('user.blog');
    }
    function duan(){
        return view('user.duan');
    }
    function duandetail(){
        return view('user.duan-single');
    }
    function tuyendung(){
        return view('user.tuyendung');
    }
    function lienhe(){
        return view('user.contact');
    }
    function masterisecentralpoint(){
        return view('user.MASTERISECENTERPOINT');
    }
    function lumiereboulevard(){
        return view('user.lumiere-boulevard');
    }
    function kygui(){
        return view('user.kygui');
    }
    function lumimeRiverside(){
        return view('user.Lumiere-Riverside');
    }
    function delasol(){
        return view('user.delasol');
    }
    function themarq(){
        return view('user.themarq');
    }
    
}
