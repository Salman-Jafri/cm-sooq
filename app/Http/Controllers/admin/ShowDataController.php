<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowDataController extends Controller
{
    public function showdata()
    {
        return view('admin/showdata');
    }
}
