<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\admin\Country;

use DB;
use Carbon\Carbon;
class MemberLoginController extends Controller
{
    public function login()
    {
      return view('frontend.login');
    }

    public function authenticate(Request $request)
    {
        if(Auth::attempt(["username" => $request->username, "password" => $request->userpass], $request->filled("remember")))
        {
            if($request->has('page_type'))
            {
    		 	$msg = 'success';
        		echo json_encode(array($msg));
            }
            else
            {
                return redirect()->route("index");
            }
        }
        else
        {
            if($request->has('page_type'))
            {

                $msg = 'Invalid Credentials';
        		echo json_encode(array($msg));
                exit;
            }

            throw ValidationException::withMessages([
                "username" => "Invalid Username/Password"
            ]);

        }
    }

    public function showRegister()
    {
        $countries = Country::all();
        $data = [
            "countries" => $countries
        ];
        return view('frontend.register',$data);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'member_contact' => 'required|unique:ac_members,member_contact',
            'member_name' => 'required|unique:ac_members,member_name',
            'userpass' => 'required|confirmed',
        ]);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            echo json_encode(['errors'=>$validator->errors()->all()]);
        }
        else
        {
            $userpass = Hash::make($request->userpass);
            $member = Member::create(["username"=>$request->member_contact,"userpass"=>$userpass,"member_contact"=>$request->member_contact,"member_name"=>$request->member_name]);
            if($member)
            {
                // return response()->json(array('success'));
                Auth::login($member);
                echo json_encode(array('success'));

            }
            else
            {
                // return response()->json(array('error'));
                echo json_encode(array('error'));
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('member.login');
    }

    public function sendOtp(Request $request)
    {
        $errors = $request->validate([
            'phone' => 'required',
            'country' => 'required',
        ]);

        if(!empty($request->emptySet))
        {
            echo json_encode(['Invalid Request']);
        }

        if($request->phone)
        {
            $mobile_number= $request->phone;
            if(is_numeric($mobile_number))
            {
                $memberData = Member::where('username',$mobile_number)
                ->orWhere('member_contact',$mobile_number)
                ->first();

                if($memberData)
                {
                    echo json_encode(['Username/Contact Number already registered!']);
                    exit;
                }

                $is_affected   = 0;
                $random_number = random_int(8000,9999);
                $start         = $random_number;
                $end           = ($random_number+10);
                $otp_code      = random_int($start,$end);
                $otp_members   = DB::table('members_via_otp')->where('mobile_number',$mobile_number)->first();
                $signature     = 'vX0wDAZ8H2d';

                if($otp_members)
                {

                    if($this->checkOtpExpiry($otp_members))
                    {
                        echo json_encode(['success']);
                        exit;
                    }
                    else
                    {
                        $is_affected = DB::table('members_via_otp')->where('mobile_number', $mobile_number)->update(['otp_code' => $otp_code,'app_user'=>'App','app_date'=>date('Y-m-d h:i:s')]);
                    }
                }
                else
                {
                    $is_affected = DB::table('members_via_otp')->insert([
                        'mobile_number'=>$mobile_number,
                        'otp_code'=>$otp_code,
                        'app_user'=>'Web',
                        'app_date'=>date('Y-m-d h:i:s')
                    ]);
                }
                if($is_affected>0)
                {
                    $message = 'You have requested to login for SooqCars.%0aPlease use the code below:%0a'.$otp_code.'%0a'.$signature;

                    echo json_encode(array('success',$otp_code));

                }
                else
                {
                    echo json_encode(['Something Went Wrong From BackEnd']);
                }
            }
            else
            {
                echo json_encode(['Please Add a valid mobile number']);
            }
        }
        else
        {
            echo json_encode(['Please Enter a number']);
        }
    }

    public function checkOtpExpiry($data)
    {
        $mysqlTimestamp = $data->dated;
        $dateTime = Carbon::parse($mysqlTimestamp);

        /*
        this has been commented because we have different timezones for db and laravel app, we'll have to fix this in future but for now to keep it simple for testing i have used the same timezone as used in db
        $currentDateTime = Carbon::now();
        */

        $currentTimestamp = DB::select(DB::raw('SELECT CURRENT_TIMESTAMP()'))[0]->{'CURRENT_TIMESTAMP()'};
        $currentDateTime = Carbon::parse($currentTimestamp);

        $diffInMinutes = $currentDateTime->diffInMinutes($dateTime);

        if ($diffInMinutes >= 10)
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    public function checkOtp(Request $request)
    {

        // $conn = $this->db_connection($request->country);
        // if(!$conn['status'])
        // {
        //     return response($conn);
        // }
        $mobile_number = 'none';
        $otp_code      = 'none';
        $token         = 'none';

        $errors = $request->validate([
            'phoneNumber' => 'required',
            'otp' => 'required',
        ]);
        if($request->phoneNumber)
        {
            $mobile_number= $request->phoneNumber;
        }
        if($request->otp)
        {
            $otp_code=$request->otp;
        }

        if(is_numeric($mobile_number))
        {
            // $username    = 'OTP-'.$mobile_number;
            // $userpass    =  bcrypt($mobile_number.$otp_code);
            $otp_members = DB::table('members_via_otp')
            ->where('mobile_number',$mobile_number)
            ->where('otp_code',$otp_code)
            ->first();

            if($otp_members)
            {
                if($this->checkOtpExpiry($otp_members))
                {
                    echo json_encode(['success']);
                }
                else
                {
                    echo json_encode(['OTP Expired']);
                }
            }
            else
            {
                echo json_encode(['Invalid OTP']);
            }

        }
        else
        {
            echo json_encode(['Invalid Phone Number']);
        }

    }

}
