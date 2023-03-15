<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\CarsMake;
use App\Models\admin\CarsOrigin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;
class CarsMakeController extends Controller
{

    public function index()
    {
      return view('admin/cars_make');
    }

    public function show()
    { 
       $sno=0;      
       $carsmake = CarsMake::all(); 
       if($carsmake->isNotEmpty()){        
           foreach ($carsmake as $rows)
           {  
           		$image = '<img src="'.url('all_images/make_logos/'.$rows->make_logo).'" style="width:70px;height:70px;">';
                 $sno++;
                 $json[]= array(
                  $sno,
                  $rows->origin_id,
                  $rows->make,
                  $rows->make_ar,
                  $image,
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
      $error_log=array();
      $errors_counter = 0 ;
      $msg = null;
      $errors = $request->validate([
            'origin_id' => 'required',
            'make' => 'required|unique:ac_cars_make',
            'make_ar' => 'required',
      ]);

      if($request->hasFile('make_logo'))
      { 

         $allowedfileExtension=['jpg','png','jpeg','webp'];
         $file = $request->file('make_logo');

         $originalName = $file->getClientOriginalName();
         $extension = $file->getClientOriginalExtension();
         $check=in_array($extension,$allowedfileExtension);
           if(!$check)
           {
              $errors_counter++;
              array_push($error_log, 'Invalid File Extension Allowed : '.implode(',',$allowedfileExtension));
           }
          if (!$request->file('make_logo')->isValid()) 
          {
              $errors_counter++;
              array_push($error_log, 'File has errors, cannot upload');
          }
          $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
          $onlyext=$file->extension();
          $fileName = $onlyname.'_'.time(). '.'.$onlyext;  
          $is_uploaded = $file->move(public_path('all_images/make_logos'), $fileName);
          if(!$is_uploaded)
          {
              $errors_counter++;
              array_push($error_log, 'Cannot Upload File Try Again');
          }
       }

       if($errors_counter>0)
       {
          $msg =implode('<br>',$error_log);
       }
       else
       {
          $carsMake = new CarsMake;
          $carsMake->origin_id=$request->origin_id;  
          $carsMake->make=$request->make;
          $carsMake->make_ar=$request->make_ar;
          $carsMake->make_logo=$fileName;
          $carsMake->in_user='admin';
          if($carsMake->save())
          {
              $msg = 'success';
          }
          else
          {
              $msg = 'error';
          }
       }
       
       echo json_encode(array('token',$msg));

    }

    public function edit(Request $request)
    {
	    $edit_result =   carsmake::where('uid',$request->unique_id)->first();
	    echo json_encode(array('token_value',$edit_result));
	  }   

    public function getFiles(Request $request)
    {
       $uid = $request->uid;
       $tr = null;
       $path = './all_images/make_logos';
       $query=carsmake::where('uid',$uid)->first();

       if($query)
       {
       	  $tr .=url('all_images/make_logos/'.$query->make_logo);
	     }
       echo  json_encode(array($tr,$uid));
    }
    
    public function update(Request $request)
    {
       $uid = $request->unique_id;
       $fileName=null;
       $error_log=array();
       $errors_counter = 0 ;
       $msg = null;

        $errors = $request->validate([
              'make' => 'required|unique:ac_cars_make,make,'.$uid.',uid',
              'make_ar' => 'required|unique:ac_cars_make,make_ar,'.$uid.',uid',
        ]); 

       if($request->hasFile('make_logo'))
       { 
          
          $allowedfileExtension=['jpg','png','jpeg','webp'];
          $file = $request->file('make_logo');

          $originalName = $file->getClientOriginalName();
          $extension = $file->getClientOriginalExtension();
          $check=in_array($extension,$allowedfileExtension);
            if(!$check)
            {
               $errors_counter++;
               array_push($error_log, 'Invalid File Extension Allowed : '.implode(',',$allowedfileExtension));
            }
           if (!$request->file('make_logo')->isValid()) 
           {
               $errors_counter++;
               array_push($error_log, 'File has errors, cannot upload');
           }
           $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
           $onlyext=$file->extension();
           $fileName = $onlyname.'_'.time(). '.'.$onlyext;  
           $is_uploaded = $file->move(public_path('all_images/make_logos'), $fileName);
           if(!$is_uploaded)
           {
               $errors_counter++;
               array_push($error_log, 'Cannot Upload File Try Again');
           }
        }

        if($errors_counter>0)
        {
           $msg =implode('<br>',$error_log);
        }
        else
        {
           $carsMake = CarsMake::find($uid);
           $carsMake->origin_id=$request->origin_id;  
           $carsMake->make=$request->make;
           $carsMake->make_ar=$request->make_ar;
           if($fileName!=null)
           {
              $carsMake->make_logo=$fileName;
           }
           $carsMake->in_user='admin';
           if($carsMake->save())
           {
               $msg = 'success';
           }
           else
           {
               $msg = 'error';
           }
        }
        
        echo json_encode(array('token',$msg));	
    }

    public function delete(Request $request)
    {

        $CarsMake = CarsMake::where(['uid'=>$request->unique_id])->get();  
        if($CarsMake->isNotEmpty())
        { 

          $path='all_images/make_logos/';
          foreach($CarsMake as $rows)
          {

            if (File::exists(public_path($path.$rows->make_logo))) {
                 File::delete(public_path($path.$rows->make_logo));
             }
          }   
         $status=  CarsMake::where(['uid'=>$request->unique_id])->delete(); 
        }

        if($status==1)
        {
            echo json_encode(array('token','success'));
        }else
        {
            echo json_encode(array('token','error'));
        }
        
    }
    
	public function getOrigin(Request $request)
	{
	   $uid=$request->uid;
	   $options ='<option value="" selected>Select</option>';
	   $query = CarsOrigin::orderBy('origin','Asc')->get();
       if($query->isNotEmpty())
       {
        foreach($query as $rows)
        {
        	$options .='<option value="'.$rows->uid.'">'.$rows->origin.'</option>';        	
        }
       }
       else
       {
      	   	$options ='<option value="" selected>No Data</option>';
       }
       echo $options;	
	}


}
