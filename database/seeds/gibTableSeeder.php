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
        for ($i = 0; $i < 10; $i++) {
            gib::create([
                'gibroute_id' => $faker->numberBetween(1, 50),
                'driver_id' => $faker->numberBetween(1, 9),
                'meetup' => $faker->city,
                'price' => $faker->randomNumber,
                'seats' => $faker->randomNumber,
                'date' => $faker->date(),
                'special_note' => $faker->realText(50),
                'time' => $faker->time()
            ]);
        }
    }
}
