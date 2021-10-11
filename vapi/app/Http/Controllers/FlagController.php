<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Flags;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    public function verify(Request $request)
    {
        $challengeid=$request->input('challengeid');
        $flag=$request->input('flag');

        $validflag=Flags::where('challengeid',$challengeid)->where('flag',$flag);

        if($validflag)
        {
            return response(json_encode(array("success"=>"true")), 200)
            ->header('Content-Type', 'application/json');
        }
        else
        {
            return response(json_encode(array("success"=>"false")), 200)
            ->header('Content-Type', 'application/json');
        }
    }
}
