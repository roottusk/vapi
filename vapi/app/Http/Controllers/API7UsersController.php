<?php

namespace App\Http\Controllers;

use App\CustomClasses\CustomHeaderAuth;
use App\CustomClasses\Variables;
use App\Models\API7Users;
use Illuminate\Http\Request;

class API7UsersController extends Controller
{
    public function login(Request $request)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $user = new CustomHeaderAuth($request->header('Authorization-Token'));
            $validuser = API7Users::where('username',$user->getUsername())->where('password',$user->getPassword())->first();

            if($validuser)
            {
                session_start();
                $_SESSION['uname']=$validuser->username;
                return response(json_encode(array("success"=>"true","msg"=>"User logged in")), 200)
                ->header('Content-Type', 'application/json');
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
        $user = json_decode($request->getContent(), true);
        $user['authkey'] = hash("sha256",$user['username'].$user['password'].base64_decode(Variables::getAPI7SecretSalt()));

        return API7Users::create($user)->makeHidden('authkey')->toArray();
    }

    public function logout(Request $request)
    {
        session_start();
        $_SESSION["uname"]="";
        session_destroy();

        return response(json_encode(array("success"=>"true","msg"=>"User logged out")), 200)
            ->header('Content-Type', 'application/json');
    }

    public function showkey(Request $request)
    {
        session_start();

        if(isset($_SESSION['uname']))
        {
            $user = API7Users::where('username',$_SESSION['uname'])->first();

                if($user)
                {
                    if($request->hasHeader('Origin') && trim($request->header('Origin'))!="")
                    {
                        return response(array("flag"=>base64_decode(Variables::getAPI7Flag()),"user"=>$user), 200)
                        ->header('Content-Type', 'application/json')
                        ->header('Access-Control-Allow-Origin',$request->header('Origin'))
                        ->header('Access-Control-Allow-Credentials','true');
                    }
                    else
                    {
                        return response($user, 200)
                        ->header('Content-Type', 'application/json')
                        ->header('Access-Control-Allow-Origin','*')
                        ->header('Access-Control-Allow-Credentials','true');
                    }
                    return $user;
                }
                else
                {
                    return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 403)
                        ->header('Content-Type', 'application/json');
                }

                return response(json_encode(array("success"=>"false","cause"=>"usernameOrPasswordIncorrect")), 403)
                        ->header('Content-Type', 'application/json');
        }
        return response(json_encode(array("success"=>"false","cause"=>"userNotLoggedIn")), 403)
                        ->header('Content-Type', 'application/json');
    }

}
