<?php

use Illuminate\Database\Seeder;
use App\Sreni;
class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sreniData = [
            [
               'name'=>'Class 1',
            ],
            [
               'name'=>'Class 2',
            ],
            [
               'name'=>'Class 3',
            ],
            [
               'name'=>'Class 4',
            ],
            [
               'name'=>'Class 5',
            ],
            [
               'name'=>'Class 6',
            ],
            [
               'name'=>'Class 7',
            ],
            [
               'name'=>'Class 8',
            ],
            [
               'name'=>'Class 9',
            ],
           
        ];
  
        foreach ($sreniData as $key => $val) {
            Sreni::create($val);
        }
    }
}
