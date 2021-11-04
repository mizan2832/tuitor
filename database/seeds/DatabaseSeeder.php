<?php

use Illuminate\Database\Seeder;

namespace Database\Seeders;


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
	        UnionSeeder::class,
	        DivisionSeeder::class,
    	]);

        

    }
}
