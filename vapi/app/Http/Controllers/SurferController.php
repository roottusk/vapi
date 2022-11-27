<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurferController extends Controller
{
    public function show(Request $request)
    {
        if($request->input('url')!="")
        {
            $url = $request->input('url');
            if(!strpos($url,"127.0.0.1") && !strpos($url,"localhost"))
            {
                $data=file_get_contents($url);
                return response(json_encode(array("success"=>"true","data"=>base64_encode($data))), 200)
                ->header('Content-Type', 'application/json');
            }
            else
            {
                return response(json_encode(array("success"=>"false","msg"=>"Whoa!!! Not Allowed!!")), 403)
                ->header('Content-Type', 'application/json');
            }
        }
        else
        {
            return response(json_encode(array("success"=>"false","cause"=>"url param not set")), 403)
            ->header('Content-Type', 'application/json');
        }
    }
}
