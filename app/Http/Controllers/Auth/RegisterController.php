<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      
        return User::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'institution' => $data['institution'],
            'subject' => $data['subject'],
            'qualification' => $data['qualification'],
            's_medium' => $data['s_medium'],
            'ssc_year' => $data['ssc_year'],
            'ssc_institution' => $data['ssc_institution'],
            'ssc_group' => $data['ssc_group'],
            'ssc_gpa' => $data['ssc_gpa'],
            'hsc_year' => $data['hsc_year'],
            'hsc_institution' => $data['hsc_institution'],
            'hsc_group' => $data['hsc_group'],
            'hsc_gpa' => $data['hsc_gpa'],
            'honours_year' => $data['honours_year'],
            'honours_institution' => $data['honours_institution'],
            'honours_subject' => $data['honours_subject'],
            'honours_gpa' => $data['honours_gpa'],
            'about_yourself' => $data['about_yourself'],
            'district' => $data['district'],
            'preferred_area' => $data['preferred_area'],
            'medium' => $data['medium'],
            'preferred_class' => $data['preferred_class'],
            'preferred_subject' => $data['preferred_subject'],
            'tuitoring_days' => $data['tuitoring_days'],
            'shift' => $data['shift'],
            'salary' => $data['salary'],
            'tuitoring_style' => $data['tuitoring_style'],
            'experience' => $data['experience']


        ]);
    }
}
