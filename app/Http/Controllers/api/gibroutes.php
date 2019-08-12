<?php

namespace App\Http\Controllers\api;

use App\gibRoute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class gibroutes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['data' => ['routes' => gibRoute::all()]], 200);
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
            'source' => ['required', 'max:255'],
            'destination' => ['required', 'max:255'],
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
        $validation = $this->validator($request->all());
        if($validation->fails()){
            return $validation->errors()->toJson();
        }else {
            $gibroute = gibRoute::create($request->all());
            return response()->json($gibroute, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gibRoute  $route
     * @return \Illuminate\Http\Response
     */
    public function show(gibRoute $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gibRoute  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(gibRoute $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gibRoute  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gibRoute $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gibRoute  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(gibRoute $route)
    {
        //
    }
}
