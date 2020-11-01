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
        $this->call(CitySeeder::class);
        $this->call(GradeSeeder::class);
        $this->call(TrackSeeder::class);
        $this->call(AdminSeeder::class);

    }
}
