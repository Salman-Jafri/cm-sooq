<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseCategoryController extends Controller
{
    public function expenseCategory()
    {
        return view('admin/expense_category');
    }
}
