<?php

use Illuminate\Database\Seeder;
use App\District;
class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $DistrictData = [
            [
               'name'=>'Dhaka',
            ],
            [
               'name'=>'Tangail',
            ],
            [
               'name'=>'Chottogram',
            ],
            [
               'name'=>'Khulna',
            ],
            [
               'name'=>'Rajshahi',
            ],
            [
               'name'=>'Munshigonj',
            ],
            [
               'name'=>'Manikgonj',
            ],
            [
               'name'=>'Savar',
            ],
            [
               'name'=>'Kollyanpur',
            ],
           
        ];
  
        foreach ($DistrictData as $key => $val) {
            District::create($val);
        }
    }
}
