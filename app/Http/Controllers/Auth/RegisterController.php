<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use File;
use Input;
use Image;
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
    protected $redirectTo;

    public function __construct()
    {
        if (Auth::check() && Auth::user()->is_admin == 1) {
            return redirect()->route('admin.route');
        }elseif ( Auth::check() && Auth::user()->is_tutor == 2) {
            return redirect()->route('tutor.route');
        }else {
            $this->redirectTo = url('/');
        }
        
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
            'gender'=>['required'],
            'phone_number'=>['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'nijerChobi'=>['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'institution'=>['required'],
            'chatroCard'=>['required'],
            'subject'=>['required'],
            'votarCard'=>['required'],
            'qualification'=>['required'],
            's_medium'=>['required'],
            'ssc_year'=>['required'],
            'ssc_institution'=>['required'],
            'ssc_group' => ['required'],
            'ssc_gpa' => ['required'],
            'hsc_year' => ['required'],
            'hsc_institution' => ['required'],
            'hsc_group' => ['required'],
            'hsc_gpa' => ['required'],
            'honours_year' => ['required'],
            'honours_institution' => ['required'],
            'honours_subject' => ['required'],
            'honours_gpa' => ['required'],
            'about_yourself' => ['required'],
            'district' => ['required'],
            'preferred_area' => ['required'],
            'medium' => ['required'],
            'preferred_class' => ['required'],
            'preferred_subject' => ['required'],
            'tuitoring_days' => ['required'],
            'shift' => ['required'],
            'salary' => ['required'],
            'tuitoring_style' => ['required'],
            'experience' => ['required']
            
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
       
        
        
            $image    = $data['nijerChobi'];
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/nijerchobi/' . $filename);
            Image:: make($image)->resize(500, 300)->save($location);
        
       
            $image    =  $data['chatroCard'];
            $chatroCard = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/chatrocard/' . $chatroCard);
            Image:: make($image)->resize(500, 300)->save($location);
      
            $image    = $data['votarCard'];
            $votarCard = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('/images/votarcard/' . $votarCard);
            Image:: make($image)->resize(500, 300)->save($location);
        

        return User::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'profile' => $filename,
            'password' => Hash::make($data['password']),
            'institution' => $data['institution'],
            'studentId' => $chatroCard,
            'subject' => $data['subject'],
            'nationalId' => $votarCard,
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
