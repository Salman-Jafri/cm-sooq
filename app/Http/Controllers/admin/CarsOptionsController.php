<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsOptions;
use Illuminate\Http\Request;

class CarsOptionsController extends Controller
{
    public function carsOptions()
    {
        return view('admin/cars_options');
    }
}
