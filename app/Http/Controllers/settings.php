<?php

namespace App\Http\Controllers;

use App\profile;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Hash;

class settings extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = \Auth::user()->profile;
        $email = $profile->user->email;
        return view('settings.profile')->with(['profile' => $profile, 'email' => $email]);
    }

    public function changePassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->withErrors(['current-password', "Your current password does not matches with the password you provided. Please try again."]);
        }

        if (strcmp($request->get('current-password'), $request->get('new-password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->with("error", "New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success", "Password changed successfully !");
    }

    public function uploadAvatar(Request $request)
    {

        dd($request);
        $validation = Validator::make($request->all(), [
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validation->passes()) {
            $image = $request->file('select_file');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);

            return response()->json([
                'message'   => 'Image Upload Successfully',
                'uploaded_image' => '<img src="/images/' . $new_name . '" class="img-thumbnail" width="300" />',
                'class_name'  => 'alert-success'
            ]);
        } else {
            return response()->json([
                'message'   => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name'  => 'alert-danger'
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function account()
    {
        return view('settings.account');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function security(Request $request)
    {
        return view('settings.security');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function emails(profile $profile)
    {
        return view('settings.emails');
    }

    public function cards()
    {
        return view('settings.cards');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function notifications(profile $profile)
    {
        return view('settings.notifications');
    }
}
