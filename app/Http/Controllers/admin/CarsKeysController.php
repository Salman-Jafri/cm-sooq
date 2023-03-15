<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsKeys;
use Illuminate\Http\Request;

class CarsKeysController extends Controller
{
    public function carsKeys()
    {
        return view('admin/cars_keys');
    }
}
