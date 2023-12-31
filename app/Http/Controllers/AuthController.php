<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //write func login 
    function login()
    {
        return view("login");
    }

    function login_post(Request $request){
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (
            auth()->guard('web')->attempt($credentials, $remember)
        ) {
                return redirect('/dashboard');
        } else
            return back()->with('thongbao', 'Email, Password không đúng');
    }

    function logout(){
        auth()->guard('web')->logout();
        return redirect('/login')->with('thongbao', 'Đăng xuất thành công');
    }
}
