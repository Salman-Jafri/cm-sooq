<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard1Controller extends Controller
{
    public function dashboard1()
    {
        return view('admin/dashboard1');
    }
}
