<?php

use App\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\profile;
use App\giber;
use App\driver;
use App\admin;
use App\Services\Slug;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('dark');

        User::create([
            'phonenumber' => '0613619024',
            'email' => 'sfisohlabisa@gmail.com',
            'slug' => Slug::createSlug('simphiwe', 'hlabisa'),
            'password' => $password
        ]);

        admin::create([
            'user_id' => 1,
        ]);

        profile::create([
            'user_id' => 1,
            'first_name' => 'simphiwe',
            'last_name' => 'hlabisa',
            'gender' => 'male',
            'city' => 'esikhawini',
            'country' => 'za',
            'img_src' => $faker->imageUrl()
        ]);

        giber::create([
            'user_id' => 1,
        ]);

        driver::create([
            'user_id' => 1,
        ]);


        //generate few users 10 in total
        for ($i = 2; $i < 10; $i++) {
            $user = profile::create([
                'user_id' => $i,
                'first_name' => $faker->firstNameMale,
                'last_name' => $faker->lastName,
                'gender' => 'male',
                'city' => $faker->city,
                'country' => $faker->countryCode,
                'img_src' => $faker->imageUrl()
            ]);
            User::create([
                'phonenumber' => $faker->phoneNumber,
                'email' => $faker->email,
                'password' => $password,
                'slug' => Slug::createSlug($user->first_name, $user->last_name)
            ]);

            giber::create([
                'user_id' => $i,
            ]);

            driver::create([
                'user_id' => $i,
            ]);
        }
    }
}
