<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    function index(){
        return view('client.clients.index');
    }
    function gioithieu(){
        return view('client.clients.about');
    }
    function baiviet(){
        return view('client.clients.blog');
    }
    function duan(){
        return view('client.clients.duan');
    }
    function duandetail(){
        return view('client.clients.duan-single');
    }
    function tuyendung(){
        return view('client.clients.tuyendung');
    }
    function lienhe(){
        return view('client.clients.contact');
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
