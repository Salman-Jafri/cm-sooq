<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            return redirect()->route("index");
        }
        else
        {
            throw ValidationException::withMessages([
                "username" => "Invalid Username/Password"
            ]);
        }
    }

    public function show_register()
    {
      return view('frontend.register');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username' => 'required|unique:ac_members,username',
            'member_contact' => 'required|unique:ac_members,member_contact',
            'member_name' => 'required|unique:ac_members,member_name',
        ]);

        if ($validator->fails())
        {
            // return response()->json(['errors'=>$validator->errors()->all()]);
            echo json_encode(['errors'=>$validator->errors()->all()]);
        }
        else
        {
            $userpass = Hash::make($request->userpass);
            $member = Member::create(["username"=>$request->username,"userpass"=>$userpass,"member_contact"=>$request->member_contact,"member_name"=>$request->member_name]);
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
}
