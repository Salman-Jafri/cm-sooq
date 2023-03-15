<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsFuelType;
use Illuminate\Http\Request;

class CarsFuelTypeController extends Controller
{
    public function carsFuelType()
    {
        return view('admin/cars_fuel_type');
    }
}
