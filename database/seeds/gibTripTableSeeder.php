<?php

use Illuminate\Database\Seeder;
use App\gibTrip;

class gibTripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 1; $i < 50; $i++){
            gibTrip::create([
                'giber_id' => $faker->numberBetween(1,10),
                'gib_id' => $faker->numberBetween(1,10),
                'meetup' => $faker->city()
            ]);
        }
    }
}
