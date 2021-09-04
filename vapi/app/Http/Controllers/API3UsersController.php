<?php

namespace App\Http\Controllers;

use App\Models\API3Users;
use Illuminate\Http\Request;

class API3UsersController extends Controller
{
    public function login(Request $request)
    {

        $user=API3Users::where('username',$request->input('username'))
            ->where('password',$request->input('password'))->first();

        if($user)
        {
            return response(json_encode(array("success"=>"true","username"=>$user->username)), 200)
            ->header('Content-Type', 'application/json');
        }
        else
        {
            return response(json_encode(array("success"=>"false","cause"=>"Incorrect Username or Password")), 401)
            ->header('Content-Type', 'application/json');
        }

    }

    public function store(Request $request)
    {
        return API3Users::create(json_decode($request->getContent(), true));
    }

}
