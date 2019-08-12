<?php

use Illuminate\Database\Seeder;
use App\gib;

class gibTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clear run table
        gib::truncate();

        $faker = \Faker\Factory::create();


        // make 10 runs
        for($i = 0; $i < 10; $i++){
            gib::create([
                'gibroute_id' => $faker->numberBetween(1,49),
                'driver_id' => $faker->numberBetween(1,10),
                'meetup' => $faker->city,
                'price' => $faker->randomNumber,
                'seats' => $faker->randomNumber,
                'date' => $faker->date(),
                'time' => $faker->time()
            ]);
        }
    }
}
