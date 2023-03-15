<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function members()
    {
        return view('admin/members');
    }
}
