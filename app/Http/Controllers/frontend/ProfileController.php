<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function profile()
    {
        // Data Sending To View Start

      $uid = auth()->user()->uid;
      $data = [];
      $member = Member::where('uid',$uid)->get();
            $data['login_type'] = $member[0]->member_type;
            $data["username"] = $member[0]->username;
            $data['userpass'] = $member[0]->userpass;
            $data['member_type'] = $member[0]->member_type;
            $data['member_name'] = $member[0]->member_name;
            $data['member_contact'] = $member[0]->member_contact;
            $data['profile_image']= 'frontend/images/svgs/user.svg';
            $data['member_email'] = $member[0]->member_email;
            $data['member_contact2'] = $member[0]->member_contact2;
            $data['member_location'] = $member[0]->member_location;
            $data['member_description'] = $member[0]->member_description;
            $data['banner_image']= 'system_files/banner-placeholder.jpg';

            if(File::exists(public_path('member_banner_images/'.$member[0]->banner_image)))
            {
                $data['banner_image'] = 'member_banner_images/'.$member[0]->banner_image;
            }
            if(File::exists(public_path('member_profile_images/'.$member[0]->profile_image)))
            {
                $data['profile_image'] = 'member_profile_images/'.$member[0]->profile_image;
            }
            return view('frontend.profile')->with('data',$data);

            // Data Sending To View End
    
    }

    public function update(Request $request){
        
        // Data Updation Start

        $response = [];
        $up_errors = 0;
        $uid = auth()->user()->uid;
        $member = Member::find($uid);
        $member->member_name = $request->member_name;
        $member->member_contact = $request->member_contact;
        $member->username = $request->username;

        if($request->userpass != ""){
            $member->userpass = Hash::make($request->userpass);
        }

        // Profile_image Uploading Start

        if($request->hasFile('profile_image')){

            $allowedfileExtension=['jpg','png','jpeg','webp'];
            $file = $request->file('profile_image');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);

           if(!$check)
           {
            $up_errors++;
            $response['profile_error'] = 'type_error1';
           }
           else{

           $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
           $onlyext=$file->extension();
           $fileName = $onlyname.'_'.time(). '.'.$onlyext;
           $is_uploaded = $file->move(public_path('member_profile_images/'), $fileName);
            
            if($is_uploaded){

                $member->profile_image = $fileName;

                }
                else{
                $up_errors++;
            }
          }
        
        }

        // Profile_image Uploading End

        // Banner_image Uploading Start
            if($request->hasFile('banner_image')){

            $allowedfileExtension1=['jpg','png','jpeg','webp'];
            $file1 = $request->file('banner_image');
            $originalName1 = $file1->getClientOriginalName();
            $extension1 = $file1->getClientOriginalExtension();
            $check1=in_array($extension1,$allowedfileExtension1);

           if(!$check1)
           {
            $up_errors++;
            $response['banner_error'] = 'type_error2';
           }
           else{

           $onlyname1 = pathinfo($originalName1, PATHINFO_FILENAME);
           $onlyext1=$file1->extension();
           $fileName1 = $onlyname1.'_'.time(). '.'.$onlyext1;
           $is_uploaded1 = $file1->move(public_path('member_banner_images/'), $fileName1);
           if($is_uploaded1){

                $member->banner_image = $fileName1;
            }
            else{
                $up_errors++;
            }
          }
        }

        // Banner_image Uploading End


        $member->member_email = $request->member_email;
        $member->member_contact2 = $request->member_contact2;
        $member->member_location = $request->member_location;
        $member->member_description = $request->member_description;
        if($up_errors == 0){

        if($member->save())
        {
            $msg = 'success';
            $response['msg'] = $msg;
        }else
        {
            $msg = 'failed';
            $response['msg'] = $msg;
        }

        }

        echo json_encode($response);
        
    // Data Updation End

    }
}
