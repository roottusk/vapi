<?php

namespace App\Http\Controllers;

use App\CustomClasses\CustomHeaderAuth;
use App\Models\API5Users;
use Illuminate\Http\Request;

class API5UsersController extends Controller
{

    public function show(Request $request,$id)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $user = new CustomHeaderAuth($request->header('Authorization-Token'));
            $validuser = API5Users::where('username',$user->getUsername())->where('password',$user->getPassword())->where('id',$id)->count();

            if($validuser>0)
            {
                return API5Users::find($id);
            }
            else
            {
                return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 403)
                ->header('Content-Type', 'application/json');
            }

        }

        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {
        return API5Users::create(json_decode($request->getContent(), true));
    }

    public function showall(Request $request)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $user = new CustomHeaderAuth($request->header('Authorization-Token'));
            $validuser = API5Users::where('username',$user->getUsername())->where('password',$user->getPassword())->count();

            if($validuser>0)
            {
                return API5Users::all();
            }
            else
            {
                return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 403)
                ->header('Content-Type', 'application/json');
            }
        }


        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');

    }

}
