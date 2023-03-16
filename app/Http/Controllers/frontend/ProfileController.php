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
            $error = "The filetype you are attempting to upload is not allowed.";
             $profile_image_errors = array('error'=>$error,'status'=>201);
           }
           else{

           $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
           $onlyext=$file->extension();
           $fileName = $onlyname.'_'.time(). '.'.$onlyext;
           $is_uploaded = $file->move(public_path('member_profile_images/'), $fileName);
            
            if($is_uploaded){

                $member->profile_image = $fileName;

                }
          }
        
        }

        // Profile_image Uploading End

        // Banner_image Uploading Start
            if($request->hasFile('banner_image')){

            $allowedfileExtension=['jpg','png','jpeg','webp'];
            $file = $request->file('banner_image');
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $check=in_array($extension,$allowedfileExtension);

           if(!$check)
           {
            $up_errors++;
            $error = "The filetype you are attempting to upload is not allowed.";
            $banner_image_errors = array('error'=>$error,'status'=>201);
           }
           else{

           $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
           $onlyext=$file->extension();
           $fileName = $onlyname.'_'.time(). '.'.$onlyext;
           $is_uploaded = $file->move(public_path('member_banner_images/'), $fileName);
           if($is_uploaded){

                $member->banner_image = $fileName;
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
        }

        }

        echo json_encode(['msg'=>$msg]);
        
    // Data Updation End

    }
}
