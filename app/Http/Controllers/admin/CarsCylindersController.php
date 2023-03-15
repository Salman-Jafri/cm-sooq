<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsCylinders;
use Illuminate\Http\Request;

class CarsCylindersController extends Controller
{
    public function carsCylinders()
    {
        return view('admin/cars_cylinders');
    }
}
