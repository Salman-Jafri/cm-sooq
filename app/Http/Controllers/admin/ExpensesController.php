<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function expenses()
    {
        return view('admin/expenses');
    }
}
