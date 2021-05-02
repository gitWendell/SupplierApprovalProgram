<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\StateSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\CitySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run()
    {
        $this->call([
            StateSeeder::class,
            CountrySeeder::class,
            CitySeeder::class,
        ]);
    }
}
