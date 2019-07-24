<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\models\gibTrip;

class gibtrips extends Controller
{
    /**
     * Display a listing of rider trips active canceled drifted and old.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = \Auth::guard('api')->user()->giber->trips;
        return response()->json(['data' => ['trips' => $trips]]);
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
            'giber_id' => ['required', 'max:255'],
            'gib_id' => ['required', 'max:255'],
            'meetup' => ['required', 'string', 'max:255'],
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
        }else{
            $gibTrip = gibTrip::create($request->all());
            return response()->json($gibTrip, 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function show(gibTrip $gibtrip)
    {
        // $trip = gibTrip::findorfail($gibtrip);

        // dd($trip);
        return $gibtrip;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gibTrip $gibTrip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function destroy(gibTrip $gibTrip)
    {
        //
    }

    /**
     * returns active rider trips.
     *
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function active()
    {

    }

    /**
     * returns draft rider trips.
     *
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function draft()
    {

    }

    /**
     * returns canceled rider trips.
     *
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function canceled()
    {

    }

    /**
     * returns completed rider trips.
     *
     * @param  \App\models\gibTrip  $gibTrip
     * @return \Illuminate\Http\Response
     */
    public function completed()
    {

    }
}
