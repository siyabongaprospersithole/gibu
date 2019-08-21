<?php

use Illuminate\Database\Seeder;
use App\car;

class carTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        car::truncate();
        $faker = \Faker\Factory::create();

        // ['driver_id', 'brand', 'model', 'licence_number']
        for ($i = 0; $i < 50; $i++) {
            car::create([
                'driver_id' => $faker->numberBetween(1, 9),
                'brand' => $faker->company,
                'model' => $faker->firstName(),
                'licence' => $faker->bothify('??####')
            ]);
        }
    }
}
