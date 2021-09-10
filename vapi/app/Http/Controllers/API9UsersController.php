<?php

namespace App\Http\Controllers;

use App\Models\API9Users;
use Illuminate\Http\Request;

class API9UsersController extends Controller
{
    public function login(Request $request)
    {
        return API9Users::where('username',$request->input('username'))->where('pin',$request->input('pin'))->first();
    }
}
