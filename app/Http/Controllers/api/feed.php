<?php

namespace App\Http\Controllers\api;

use App\models\gib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\user;

class feed extends Controller
{
    public function index()
    {
        // dd('sa');
        // $auth_user = \Auth::guard('api')->user()->profile;
        // $user = user::find($auth_user->id);
        // $profile = $user->profile;

        // dd($auth_user);
        return response()->json(['feed' => gib::all()], 200);// ;
    }
}
