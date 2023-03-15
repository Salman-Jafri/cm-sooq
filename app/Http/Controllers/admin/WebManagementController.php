<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\WebHome;
use App\Models\admin\WebLearning;
use App\Models\admin\Translation;
use App\Models\admin\Subscribers;
use Illuminate\Http\Request;

class WebManagementController extends Controller
{
    public function webHome()
    {
        return view('admin/web_home');
    }
    public function webSliders()
    {
        return view('admin/web_sliders');
    }
    public function webFooter()
    {
        return view('admin/web_footer');
    }
    public function webLearning()
    {
        return view('admin/web_learning');
    }
    public function subscribers()
    {
        return view('admin/subscribers');
    }
    public function translation()
    {
        return view('admin/translation');
    }
}
