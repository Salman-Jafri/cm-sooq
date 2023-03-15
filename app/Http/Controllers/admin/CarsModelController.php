<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsModel;
use Illuminate\Http\Request;

class CarsModelController extends Controller
{
    public function carsModel()
    {
        return view('admin/cars_model');
    }
}
