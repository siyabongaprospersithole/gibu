<?php
namespace App\Http\Controllers\Auth;
use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\profile;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phonenumber' => ['required', 'string', 'unique:users', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $faker = \Faker\Factory::create();
        $gender = $faker->randomElement(['male', 'female']);

        // dd($data);
        $user = user::create(['phonenumber' => $data['phonenumber'], 'email' => $data['email'], 'password' => Hash::make($data['password'])]);
        $profile = profile::create(['user_id' => $user->id, 'first_name' => $data['first_name'], 'last_name' => $data['last_name'], 'gender' => $gender, 'city' => $faker->city(), 'country' => $faker->countryCode(), 'img_src' => $faker->imageUrl()]);
        return $user;
        // return user::create([
        //     'first_name' => $data['first_name'],
        //     'last_name' => $data['last_name'],
        //     'phonenumber' => $data['phonenumber'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);
    }

    // generate api token after registration
    protected function registered(Request $request, $user){
        $user->generateToken();

        // return response()->json(['data' => $user->toArray()], 201);
    }
}
