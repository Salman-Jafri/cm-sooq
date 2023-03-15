<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsTransmission;
use Illuminate\Http\Request;

class CarsTransmissionController extends Controller
{
    public function carsTransmission()
    {
        return view('admin/cars_transmission');
    }
}
