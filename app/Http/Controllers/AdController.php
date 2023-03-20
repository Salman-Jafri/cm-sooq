<?php

namespace App\Http\Controllers;

use App\Models\admin\CarsMake;
use App\Models\admin\CarsModel;
use App\Models\admin\Cars;
use App\Models\admin\CarsExteriorColor;
use App\Models\admin\CarsInteriorColor;
use App\Models\admin\CarsDriveLine;
use App\Models\admin\CarsOdometer;
use App\Models\admin\CarsFiles;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdController extends Controller
{
    public function show_add_form()
    {
        $make = CarsMake::cursor();
        $exterior_color = CarsExteriorColor::cursor();
        $interior_color = CarsInteriorColor::cursor();
        $drive_line = CarsDriveLine::cursor();
        $odometer = CarsOdometer::cursor();

        return view("frontend.post_ad", compact("make","exterior_color","interior_color","drive_line","odometer"));
    }


    public function get_models(Request $request)
    {
        if($request->has("make_id"))
        {
            $make_id = $request->make_id;
            $models = CarsModel::where("make_id",$make_id)->get();
			$options = '<option value="" selected>Choose</option>';

            foreach($models as $model)
            {
                $options .='<option value="'.$model->uid.'">'.$model->model.'</option>';
            }

            echo $options;
        }
        else
        {
            echo json_encode(array('error'));
        }
    }



    public function post_ad_pro(Request $request)
    {
        $error_log=array();
        $errors_counter = 0;
        $upload_msg = 0;
		$trans_smsg = null;

        $posted_data = new Cars;
        $posted_data->expected_arrival_date = date('Y-m-d',strtotime($request->expected_arrival_date));
        $posted_data->cpage = $request->cpage;

        if($request->has('selling_price'))
		{
			$posted_data->sell_price = $request->sell_price;
		}


        $member_id     = Auth::user()->uid;
		$cover_img     = $request->cover_img;
		$posted_data->member_id = $member_id;
		$posted_data->trader_id = $member_id;
		$posted_data->broker_id = $member_id;

        foreach($request->except(["car_uploads","_token","cover_img"]) as $key => $data)
        {
            $posted_data->$key = $data;
        }

        if($posted_data->save())
        {
            if($request->hasFile('car_uploads'))
            {

               $allowedfileExtension = ['jpg','png','jpeg','webp'];

               $files = $request->file('car_uploads');
               $ad_id = $posted_data->uid;

               foreach($files as $file)
               {
                    $originalName = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension,$allowedfileExtension);
                    if(!$check)
                    {
                        $errors_counter++;
                        array_push($error_log, 'Invalid File Extension Allowed : '.implode(',',$allowedfileExtension));
                    }
                    if (!$file->isValid())
                    {
                        $errors_counter++;
                        array_push($error_log, 'File has errors, cannot upload');
                    }
                    $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
                    $onlyext = $file->extension();
                    $fileName = $onlyname.'_'.time(). '.'.$onlyext;

                    $is_uploaded = $file->move(public_path('car_uploads'), $fileName);
                    if(!$is_uploaded)
                    {
                        $errors_counter++;
                        array_push($error_log, 'Cannot Upload File Try Again');
                    }
                    else
                    {
                        $upload_msg++;
                    }


                    $posted_data = new CarsFiles;
                    if($originalName==$cover_img)
                    {
                        $posted_data->is_main = 1;
                    }
                    $posted_data->car_id = $ad_id;
                    $posted_data->file_org_name = $originalName;
                    $posted_data->file_up_name = $fileName;
                    if($posted_data->save())
                    {
                        $upload_msg++;
                    }

               }


            }
        }

        if($errors_counter>0)
        {
            $upload_msg =implode('<br>',$error_log);
        }
        else
        {
            $msg = 'success';
            $trans_smsg = "Your post is under review, we will post it when approved. Thank you.";
        }

		echo json_encode(array('token_value',$msg,$upload_msg,$trans_smsg));

    }
}
