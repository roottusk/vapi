<?php

namespace App\Http\Controllers;

use App\Models\API2Users;
use Illuminate\Http\Request;

class API2UsersController extends Controller
{
    public function login(Request $request)
    {

        $user=API2Users::where('email',$request->input('email'))
            ->where('password',$request->input('password'))->first();

        if($user)
        {
            return response(json_encode(array("success"=>"true","token"=>$user->token)), 200)
            ->header('Content-Type', 'application/json');
        }
        else
        {
            return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 401)
            ->header('Content-Type', 'application/json');
        }

    }

    public function show(Request $request)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $token=$request->header('Authorization-Token');

            if(API2Users::where('token',$token)->count() > 0)
            {
                return API2Users::all();
            }
            else
            {
                return response(json_encode(array("success"=>"false","cause"=>"InvalidToken")), 401)
                ->header('Content-Type', 'application/json');
            }


        }

        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');

    }
}
