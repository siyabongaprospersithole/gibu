<?php

namespace App\Http\Controllers\api\admin;

use App\models\gibRoute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class gibroutes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['gibroutes' => gibRoute::all()], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\gibRoute  $gibroute
     * @return \Illuminate\Http\Response
     */
    public function show(gibRoute $gibroute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\gibRoute  $gibroute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gibRoute $gibroute)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\gibRoute  $gibroute
     * @return \Illuminate\Http\Response
     */
    public function destroy(gibRoute $gibroute)
    {
        //
    }
}
