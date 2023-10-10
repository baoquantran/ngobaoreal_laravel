<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        // $name = "Quân trần";

        
        $project = DB::table('product')->get();
        $countuser = DB::table('users')->count();
        $countproject = DB::table('product')->count();

        return view('admin.dashboard',compact('project','countuser','countproject'));
    }

}
