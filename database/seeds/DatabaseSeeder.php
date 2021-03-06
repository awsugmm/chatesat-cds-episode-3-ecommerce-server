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
        $this->call([
            ManufacturerTableSeeder::class,
            PhoneTableSeeder::class,
            PhoneDetailTableSeeder::class
        ]);
    }
}
