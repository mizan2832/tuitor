<?php

use Illuminate\Database\Seeder;

class TuitorInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Tuitor',
            'gender' => 'Male',
            'phone_number' => '01515612832',
            'phone_number' => '01515612832',
                
        ]);
    }
}
