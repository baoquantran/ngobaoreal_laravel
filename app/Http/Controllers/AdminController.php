<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Auth;
class AdminController extends Controller
{
    function index()
    {
        // $name = "Quân trần";

        // $test = Str::slug($name);
        // abort_if(Gate::denies('user_access'),403,'Bạn không có quyền truy cập');
        return view('admin.dashboard');
    }

}
