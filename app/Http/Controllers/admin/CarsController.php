<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Cars;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function cars()
    {
        return view('admin/cars');
    }
}
