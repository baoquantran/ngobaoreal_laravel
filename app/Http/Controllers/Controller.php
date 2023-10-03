<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function __construct()
    {
        $catepost = DB::table('cate_post')->get();
        View::share(compact('catepost'));
    }
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
        return view('client.kygui.MASTERISECENTERPOINT');
    }
    function lumiereboulevard(){
        return view('client.kygui.lumiere-boulevard');
    }
    function kygui(){
        return view('client.kygui.kygui');
    }
    function lumimeRiverside(){
        return view('client.kygui.Lumiere-Riverside');
    }
    function delasol(){
        return view('client.kygui.delasol');
    }
    function themarq(){
        return view('client.kygui.themarq');
    }
    
}
