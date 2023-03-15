<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsOrigin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class CarsOriginController extends Controller
{
    public function carsOrigin()
    {
        return view('admin/cars_origin');
    }

    public function show()
    { 
       $sno=0;      
       $member = CarsOrigin::cursor(); 
       if($member->isNotEmpty()){        
           foreach ($member as $rows)
           {  
                 $sno++;
                 $json[]= array(
                  $sno,
                  $rows->origin,
                  '<a href="#" data-toggle="modal" data-target="#edit-modal"   id="'.$rows->uid.'" class="ml-1 text-warning"><i class="fas fa-edit"></i></a>&nbsp;'.
                  '<a href="#" class="ml-1 text-danger" data-toggle="modal" data-target="#delete-modal" lbl="btn-delete" id="'.$rows->uid.'"><i class="fas fa-trash"></i></a>',
              );     
             }
             $response = array();
             $response['success'] = true;
             $response['aaData'] = $json;
             echo json_encode($response);                
         }
         else
         {
           $response = array();
           $response['sEcho'] = 0;
           $response['iTotalRecords'] = 0;
           $response['iTotalDisplayRecords'] = 0;
           $response['aaData'] = [];
           echo json_encode($response);
       }
    }
    public function add(Request $request)
    {


        $errors = $request->validate([
              'origin' => 'required|unique:ac_cars_origin',
        ]);

          $CarsOrigin = new CarsOrigin;
          $CarsOrigin->origin=$request->origin;
        $CarsOrigin->in_user='admin';
        if(!$CarsOrigin->save())
        {
            echo json_encode(array('token',$errors));
        }else
        {
            echo json_encode(array('token','success'));
        }

    }

    public function edit(Request $request)
    {
      $edit_result =   CarsOrigin::where('uid',$request->unique_id)->first();
      echo json_encode(array('token_value',$edit_result));
    } 

    public function update(Request $request)
    {
       $uid = $request->unique_id;
       $fileName=null;
       $error_log=array();
       $errors_counter = 0 ;
       $msg = null;

        $errors = $request->validate([
              'origin' => 'required|unique:ac_cars_origin,origin,'.$uid.',uid',
        ]); 

         $CarsOrigin = CarsOrigin::find($uid);
         $CarsOrigin->origin=$request->origin;  
         $CarsOrigin->in_user='admin';
         if($CarsOrigin->save())
         {
             $msg = 'success';
         }
         else
         {
             $msg = 'error';
         }    
        echo json_encode(array('token',$msg));  
    }
    
    public function delete(Request $request)
    {        

        $status= CarsOrigin::where(['uid'=>$request->unique_id])->delete();
        if($status==1)
        {
            echo json_encode(array('token','success'));
        }else
        {
            echo json_encode(array('token','error'));
        }
        
    }



}
