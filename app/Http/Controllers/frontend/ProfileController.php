<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;

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

            if(is_file(public_path('member_banner_images/'.$member[0]->banner_image)))
            {
                $data['banner_image'] = 'member_banner_images/'.$member[0]->banner_image;
            }
            if(is_file(public_path('member_profile_images/'.$member[0]->profile_image)))
            {
                $data['profile_image'] = 'member_profile_images/'.$member[0]->profile_image;
            }
            return view('frontend.profile')->with('data',$data);

            // Data Sending To View End
    
    }

    public function update(Request $request){
     
        $uid            = auth()->user()->uid;
        $member_name    = $request->member_name;
        $member_contact = $request->member_contact;
        $username       = $request->username;
        $userpass       = $request->userpass;
        $member_email   = $request->member_email;
        $member_contact2 = $request->member_contact2;
        $member_location = $request->member_location;
        $member_description = $request->member_description;

        $up_array = [];

        $contact_error  =0;
        $username_error =0;

       $contact_error = Member::where('member_contact', $member_contact)->where('uid','!=',$uid)->count('member_contact');
        $username_error = Member::where('username', $username)->where('uid','!=',$uid)->count('username');

        if($contact_error>0)
        {
            echo json_encode(array('contact_error'));
        }
        else if($username_error>0)
        {
            echo json_encode(array('username_error'));
        }
        else{
                $up_array['member_name'] = $member_name;
                $up_array['member_contact'] = $member_contact;
                $up_array['username'] = $username;
                $up_array['userpass'] = '';
                $up_array['profile_image']='';
                $up_array['banner_image']='';
                $up_array['member_email'] = $member_email;
                $up_array['member_contact2'] = $member_contact2;
                $up_array['member_location'] = $member_location;
                $up_array['member_description'] = $member_description;

            if(!empty($userpass))
            {
                $up_array['userpass']=Hash::make($userpass);
            }
            $up_error='none';

              // Profile_image Uploading Start

         if($request->hasFile('profile_image')){

             $allowedfileExtension=['jpg','png','jpeg','webp'];
             $file = $request->file('profile_image');
             $originalName = $file->getClientOriginalName();
             $extension = $file->getClientOriginalExtension();
             $check=in_array($extension,$allowedfileExtension);

            if(!$check)
            {
                 $up_error= 'File Type Not Allowed';
            }
            else{

            $onlyname = pathinfo($originalName, PATHINFO_FILENAME);
            $onlyext=$file->extension();
            $fileName = $onlyname.'_'.time(). '.'.$onlyext;
            $is_uploaded = $file->move(public_path('member_profile_images/'), $fileName);
            
             if($is_uploaded){

                 $up_array['profile_image'] = $fileName;

                 }
                 else{
                 $up_error == 'File Not uploaded';
             }
           }
        
         }

    //     // Profile_image Uploading End

    // Banner_image Uploading Start
         
             if($request->hasFile('banner_image')){

             $allowedfileExtension1=['jpg','png','jpeg','webp'];
             $file1 = $request->file('banner_image');
             $originalName1 = $file1->getClientOriginalName();
             $extension1 = $file1->getClientOriginalExtension();
             $check1=in_array($extension1,$allowedfileExtension1);

            if(!$check1)
            {
                $up_error= 'File Type Not Allowed';
            }
            else{

            $onlyname1 = pathinfo($originalName1, PATHINFO_FILENAME);
            $onlyext1=$file1->extension();
            $fileName1 = $onlyname1.'_'.time(). '.'.$onlyext1;
            $is_uploaded1 = $file1->move(public_path('member_banner_images/'), $fileName1);
            if($is_uploaded1){

                 $up_array['banner_image'] = $fileName1;
             }
             else{
                 $up_error == 'File Not uploaded';
             }
           }
         }

    //     // Banner_image Uploading End

            if($up_error=='none')
            {
                // $member = Member::find($uid)->updat($up_array);
                $member = Member::find($uid);
                $member->member_name = $up_array['member_name'];
                $member->member_contact = $up_array['member_contact'];
                $member->username = $up_array['username'];
                if($up_array['userpass'] != ""){$member->userpass = $up_array['userpass'];}
                if( $up_array['profile_image'] != ""){ $member->profile_image = $up_array['profile_image'];}
                if( $up_array['banner_image'] != ""){ $member->banner_image = $up_array['banner_image'];}
                $member->member_email = $up_array['member_email'];
                $member->member_contact2 = $up_array['member_contact2'];
                $member->member_location = $up_array['member_location'];
                $member->member_description = $up_array['member_description'];
                $result = $member->save();
                if($up_error=='none')
                {
                    if($result){
                        echo json_encode(array('success'));
                    }
                }
                else
                {
                    echo json_encode(array('error'));
                }
            }else
            {
                echo json_encode(array($up_error));
            }

        }
        

    }
}
