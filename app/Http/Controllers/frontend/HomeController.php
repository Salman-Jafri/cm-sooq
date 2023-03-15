<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class HomeController extends Controller
{
    public function index()
    {
    	return view('frontend.index');
    }

    public function details()
    {
      return view('frontend.details');
    }

    public function about()
    {
      return view('frontend.about');
    }

    public function contact()
    {
      return view('frontend.contact');
    }


    public function profile()
    {
      return view('frontend.profile');
    }
    public function myads()
    {
      return view('frontend.myads');
    }
    public function watchlist()
    {
      return view('frontend.watchlist');
    }
    public function following()
    {
      return view('frontend.following');
    }
    public function follower()
    {
      return view('frontend.follower');
    }
    public function postAd()
    {
      return view('frontend.post_ad');
    }


    // my office
    public function myoffice()
    {
      return view('frontend.myoffice');
    }
    public function myOfficeExpenses()
    {
      return view('frontend.myoffice_expenses');
    }
    public function officeExpensesCategory()
    {
      return view('frontend.myoffice_expense_category');
    }
    public function officeClient()
    {
      return view('frontend.myoffice_clients');
    }
    public function officeInvoiceSetting()
    {
      return view('frontend.myoffice_invoice_setting');
    }
    public function officeUser()
    {
      return view('frontend.myoffice_user');
    }
    public function officeReport()
    {
      return view('frontend.myoffice_report');
    }







}
