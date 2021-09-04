<?php

namespace App\Http\Controllers;

use App\Models\API3Comments;
use Illuminate\Http\Request;

class API3CommentsController extends Controller
{

    public function store(Request $request)
    {
        return API3Comments::create(json_decode($request->getContent(), true));
    }

    public function show()
    {
        return API3Comments::all();
    }
}

