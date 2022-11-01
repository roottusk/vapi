<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JustWeakTokens;
use Exception;
use Illuminate\Http\Request;
use \Firebase\JWT\JWT;
use App\CustomClasses\Variables;


class JustWeakTokenController extends Controller
{
    public function show(Request $request)
    {
        if($request->hasHeader('Authorization-Token') && $request->header('Authorization-Token')!="" )
        {
            $token = $request->header('Authorization-Token');
            JWT::$leeway = 60;
		    $key="YouNeverGonnaGetThisOne";

            try{

                $decoded = (array) JWT::decode($token, $key, array('HS256','none'));


                    if(time()>$decoded["exp"])
                    {
                        return response(json_encode(array("success"=>"false","cause"=>"Token Expired")), 403)
                        ->header('Content-Type', 'application/json');

                    }
                    else
                    {
                        if($decoded["role"]=="user")
                        {
                            return response(json_encode(array("success"=>"true","text"=>"Just Your Usual Text")), 200)
                            ->header('Content-Type', 'application/json');

                        }
                        if($decoded["role"]=="admin")
                        {

                            return response(json_encode(array("success"=>"true","text"=>base64_decode(Variables::getJWTFlag()))), 200)
                            ->header('Content-Type', 'application/json');
                        }

                    }

                }
                catch(Exception $e)
                {
                    return response(json_encode(array("success"=>"false","cause"=>"JWT Exception")), 403)
                    ->header('Content-Type', 'application/json');
                }

        }

        return response(json_encode(array("success"=>"false","cause"=>"authHeaderNotSet")), 403)
            ->header('Content-Type', 'application/json');
    }

    public function store(Request $request)
    {


        $key = "YouNeverGonnaGetThisOne";
        $payload = array(
            "iss" => "vapi",
            "aud" => "vapi",
            "role"=> "user",
            "iat" => time(),
            "exp" => time()+1800
        );
        $jwt = JWT::encode($payload, $key);

        if(JustWeakTokens::create(json_decode($request->getContent(), true)))
        {
            return response(json_encode(array("success"=>"true","token"=>$jwt)), 200)
            ->header('Content-Type', 'application/json');
        }
        else
        {
            return response(json_encode(array("success"=>"false")), 400)
            ->header('Content-Type', 'application/json');
        }
    }
}
