<?php

namespace App\Http\Controllers;

use App\models\gib;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class gibs extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return gib::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  \App\models\gib  $gib
     * @return \Illuminate\Http\Response
     */
    public function show(gib $gib)
    {
        return $gib;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\gib  $gib
     * @return \Illuminate\Http\Response
     */
    public function edit(gib $gib)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\gib  $gib
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gib $gib)
    {
        $gib->update($request->all());
        return response()->json($gib, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\gib  $gib
     * @return \Illuminate\Http\Response
     */
    public function destroy(gib $gib)
    {
        $gib->delete();
        return response()->json(null, 204);
    }
}
