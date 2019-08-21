<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userTableSeeder::class);
        $this->call(gibTableSeeder::class);
        $this->call(gibTripTableSeeder::class);
        $this->call(gibRouteTableSeeder::class);
        $this->call(carTableSeeder::class);
    }
}
