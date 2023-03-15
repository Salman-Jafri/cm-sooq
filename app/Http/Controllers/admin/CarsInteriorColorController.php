<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsInteriorColor;
use Illuminate\Http\Request;

class CarsInteriorColorController extends Controller
{
    public function carsInteriorColor()
    {
        return view('admin/cars_interior_color');
    }
}
