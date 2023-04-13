<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

use App\Models\admin\Support;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class SupportController extends Controller
{
    public function support()
    {
        return view('frontend/support');
    }

    public function add(Request $request)
    {
        $errors = $request->validate([
            'full_name' => 'required:support',
            'phone' => 'required|numeric:support',
            'description' => 'required:support',
        ]);

        $Support = new Support;
        $Support->full_name=$request->full_name;
        $Support->phone=$request->phone;
        $Support->email=$request->email;
        $Support->description=$request->description;
        $Support->created_by='SupportUser';
        if(!$Support->save())
        {
            echo json_encode(array('token',$errors));
        }else
        {
            echo json_encode(array('token','success'));
        }

    }

}
