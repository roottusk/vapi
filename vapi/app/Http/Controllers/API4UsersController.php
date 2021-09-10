<?php

namespace App\Http\Controllers;

use App\CustomClasses\Variables;
use App\Models\API4Users;
use Illuminate\Http\Request;

class API4UsersController extends Controller
{
    public function login(Request $request)
    {

       if(strlen($request->input('mobileno')) == 10 && is_numeric($request->input('mobileno')) )
       {
            return response(json_encode(array("success"=>"true","msg"=>"4 Digit OTP sent on mobile no.")), 200)
            ->header('Content-Type', 'application/json');
       }
       else
       {
            return response(json_encode(array("success"=>"false","msg"=>"Invalid Mobile No.")), 200)
            ->header('Content-Type', 'application/json');
       }

    }

    public function verify(Request $request)
    {

       if(strlen($request->input('otp')) == 4 && is_numeric($request->input('otp')) )
       {
           if($request->input('otp') == base64_decode(Variables::getAPI4OTP()))
           {
                return response(json_encode(array("success"=>"true","key"=>base64_decode(Variables::getAPI4APIKey()))), 200)
                ->header('Content-Type', 'application/json');
           }
           else
           {
                return response(json_encode(array("success"=>"false","cause"=>"Invalid OTP")), 403)
                ->header('Content-Type', 'application/json');
           }

       }
       else
       {
            return response(json_encode(array("success"=>"false","msg"=>"Invalid OTP")), 403)
            ->header('Content-Type', 'application/json');
       }

    }


    public function show(Request $request)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $apikey = $request->header('Authorization-Token');

            if($apikey === base64_decode(Variables::getAPI4APIKey()))
            {
                return API4Users::all();
            }
            else
            {
                return response(json_encode(array("success"=>"false","cause"=>"InvalidAuthHeader")), 403)
                ->header('Content-Type', 'application/json');
            }

        }

        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');
    }

}
