<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsDriveLine;
use Illuminate\Http\Request;

class CarsDriveLineController extends Controller
{
    public function carsDriveLine()
    {
        return view('admin/cars_drive_line');
    }
}
