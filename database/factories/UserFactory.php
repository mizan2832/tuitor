<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        "gender" => $this->faker->randomElement([
            "male",
            "female",
        ]),
        'phone_number'  => $this->faker->phoneNumber,
        "email" => $this->faker->safeEmail,
        'profile' => $faker->image('public/images',640,480, null, false),
        'password'=>Hash::make('password'),
        'role_id'=>2,
        'institution'=>$faker->text($maxNbChars = 10),
        'studentId'=> $faker->image('public/images',640,480, null, false),
        'subject'=>'CSE',
        'nationalId'=>$faker->image('public/images',640,480, null, false),
        'qualification'=>'Masters',
        's_medium'=>'Bangla Medium',
        'ssc_year'=>'2009',
        'ssc_institution'=>'BN college',
        'ssc_group'=>'Science',
        'ssc_gpa'=>'A+',
        'hsc_year'=>'2009',
        'hsc_institution'=>'BN college',
        'hsc_group'=>'Science',
        'hsc_gpa'=>'A+',
        'honours_year'=>'2017',
        'honours_institution'=>'JNU',
        'honours_subject'=>'CSE',
        'honours_gpa'=>'3.33',
        'district'=>'tangail',
        'preferred_area'=>'Mirpur,Adabor,Zigatola',
        'medium'=>'Bangla MeDIUM',
        'preferred_class'=>'Class 1, Class3',
        'preferred_subject'=>'Math,Chemistry',
        'tuitoring_days'=>3,
        'shift'=>'Morning,Night',
        'salary'=>5000,
        'tuitoring_style'=>'friendly',
        'experience'=>'5 years',
        'remember_token' => Str::random(10),
        'created_at'=> $this->faker->dateTimeBetween(-1, now()),

    ];
});
