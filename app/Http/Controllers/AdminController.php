<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dasboard()
    {
        return view('admin.dasboard');
    }
}
