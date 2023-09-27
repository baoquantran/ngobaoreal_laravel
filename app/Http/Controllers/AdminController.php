<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    function index()
    {
        $name = "Quân trần";

        $test = Str::slug($name);

        return view('admin.dashboard', compact('test'));

        
    }
}
