<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\admin\Cars;
use App\Models\admin\WebHome;
use App\Models\admin\CarsOrigin;
use App\Models\admin\CarsCylinders;
use App\Models\admin\CarsTransmission;
use App\Models\admin\CarsKeys;
use App\Models\admin\CarsInteriorColor;
use App\Models\admin\CarsExteriorColor;
use App\Models\admin\CarsOptions;
use App\Models\admin\CarsFuelType;
use App\Models\admin\CarsDriveLine;
use App\Models\admin\Wishlist;
use App\Models\admin\Translation;
use App\Models\admin\CarsFiles;
use App\Models\admin\Following;
use App\Models\admin\Aboutus;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $data = array();
        $start = 0;
        $limit = 8;

		$data['homelt_main_text'] = "";
		$data['homelt_sub_text'] = "";


        $data['brand_slider'] = DB::table('ac_cars')
            ->join('ac_cars_make', 'ac_cars.make_id', '=', 'ac_cars_make.uid')
            ->selectRaw('ac_cars.make_id, ac_cars_make.*, COUNT(make_id) AS mcount')
            ->where('car_status','Approved')->where('is_inactive',0)
            ->groupBy('make_id')
            ->orderBy('mcount','DESC')
            ->get();


		$web_home = WebHome::where('uname','lt_main_text')->orWhere('uname','lt_sub_text')->get();

        if($web_home)
        {
            foreach($web_home as $wh)
            {
                if($wh->uname == "lt_main_text")
                {
                    $data['homelt_main_text'] = $wh->content;
                }
                else
                {
                    $data['homelt_sub_text'] = $wh->content;
                }
            }
        }

        $data['latest_cars'] = Cars::where('car_status','Approved')
                ->where('is_inactive',0)->orderBy('approved_date', 'DESC')
                ->skip($start)->take($limit)
                ->with(['carsMake','carsModel','carsTransmission','carsFuelType','carsDriveLine'])
                ->get();


    	return view('frontend.index', $data);
    }

    public function getModels(Request $request)
	{

		$options ='<option>No Data Found</option>';

        $errors = $request->validate([
            'make_id' => 'required',
        ]);

		$make_id = $request->make_id;

        $data = DB::table('ac_cars')
            ->selectRaw('ac_cars.*, COUNT(ac_cars.model_id) as model_count,ac_cars_model.model')
            ->join('ac_cars_model', 'ac_cars.model_id', '=', 'ac_cars_model.uid')
            ->where('car_status','Approved')->where('is_inactive',0)->where('ac_cars.make_id',$make_id)
            ->groupBy('model_id')
            ->orderBy('model_count','DESC')
            ->get();

        if($data->count() > 0)
        {
			$options = '<option selected></option>';

            foreach($data as $rows)
            {
                $model_title = $rows->model;
				$options .='<option value="'.$rows->model_id.'">'.$model_title.' ('.$rows->model_count.')</option>';
            }
        }

        echo $options;

	}

    public function details()
    {
      return view('frontend.details');
    }

  public function about()
  {
    $query = Aboutus::get()->Firstwhere('type', '=', 'About');
    if ($query) {
      $data = $query->text;
    }
    else{
      $data='';
    }
    $data =['data'=>$data];
    return view('frontend.about',$data);
  }
  //terms and conditions
  public function terms()
  {
    $query = Aboutus::get()->Firstwhere('type', '=', 'Terms');
    if ($query) {
      $data = $query->text;
    } else {
      $data = '';
    }
    $data = ['data' => $data];
    return view('frontend.terms',$data);
  }

  //Privacy Policy
  public function policy()
  {
    $query = Aboutus::get()->Firstwhere('type', '=', 'Policies');
    if ($query) {
      $data = $query->text;
    } else {
      $data = '';
    }
    $data = ['data' => $data];
    return view('frontend.policy',$data);
  }

    public function contact()
    {
      return view('frontend.contact');
    }


    public function myads()
    {
      return view('frontend.myads');
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
