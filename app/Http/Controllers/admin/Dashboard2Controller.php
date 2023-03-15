<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard2Controller extends Controller
{
    public function dashboard2()
    {
        return view('admin/dashboard2');
    }
}
