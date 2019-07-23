<?php

namespace App\Http\Controllers\api;

use App\models\gib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\user;

class giber extends Controller
{
    public function gibs()
    {
        $giber = \Auth::guard('api')->user()->giber;
        $gibs = \Auth::guard('api')->user()->giber->gibs;
        return response()->json(['data' => ['giber' => $giber]], 200);
    }

            /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'driver_id' => ['required', 'max:255'],
            'meetup' => ['required', 'string', 'max:255'],
            'source' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'seats' => ['required', 'string', 'max:255'],
            'date' => ['required', 'string', 'max:255'],
            'time' => ['required', 'string', 'max:255'],
        ]);
    }

        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['driver_id'=> \Auth::guard('api')->user()->id]);

        $validation = $this->validator($request->all());
        if($validation->fails()){
            return $validation->errors()->toJson();
        }else{
            $gib = gib::create($request->all());
            return response()->json($gib, 201);
        }
    }
}
