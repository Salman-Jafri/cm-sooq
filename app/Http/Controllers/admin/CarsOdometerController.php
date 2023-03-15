<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsOdometer;
use Illuminate\Http\Request;

class CarsOdometerController extends Controller
{
    public function carsOdometer()
    {
        return view('admin/cars_odometer');
    }
}
