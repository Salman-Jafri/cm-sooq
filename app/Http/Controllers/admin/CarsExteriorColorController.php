<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsExteriorColor;
use Illuminate\Http\Request;

class CarsExteriorColorController extends Controller
{
    public function carsExteriorColor()
    {
        return view('admin/cars_exterior_color');
    }
}
