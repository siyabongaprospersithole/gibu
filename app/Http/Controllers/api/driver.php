<?php

namespace App\Http\Controllers\api;

use App\models\gib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\user;

class driver extends Controller
{
    public function gibs()
    {
        $driver = \Auth::guard('api')->user()->driver;
        $gibs = \Auth::guard('api')->user()->driver->gibs;
        return response()->json(['data' => ['driver' => $driver]], 200);
    }

}
