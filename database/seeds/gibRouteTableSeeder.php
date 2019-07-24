<?php

use Illuminate\Database\Seeder;
use App\models\gibRoute;

class gibRouteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 50; $i++){
            gibRoute::create([
                'source' => $faker->city(),
                'destination' => $faker->city(),
            ]);
        }
        //
    }
}
