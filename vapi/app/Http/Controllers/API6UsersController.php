<?php

namespace App\Http\Controllers;

use App\CustomClasses\CustomHeaderAuth;
use App\CustomClasses\Variables;
use App\Models\API6Users;
use Illuminate\Http\Request;

class API6UsersController extends Controller
{
    public function show(Request $request)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $user = new CustomHeaderAuth($request->header('Authorization-Token'));
            $validuser = API6Users::where('username',$user->getUsername())->where('password',$user->getPassword())->first();

            if($validuser)
            {

                if($validuser->credit >= 100)
                {
                    $validuser['flag']=base64_decode(Variables::getAPI6Flag());

                    return $validuser;
                }
                else
                {
                    return $validuser;
                }
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
        return API6Users::create(json_decode($request->getContent(), true))->makeHidden('credit')->toArray();
    }
}
