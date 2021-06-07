<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
Use App\Http\Requests\RegistrationRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }  
 
    public function register()
    {
        return view('auth.register');
    }
     
    public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
        return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
    }
 
    public function postRegister(Request $request)
    {  
      $validated = $request->validate([
        'user_name'=>'required',
        'gender'=>'required',
        'phone_number'=>'required',
        'email'=>'required|unique:users',
        'password'=>'required',
        'institution'=>'required',
        'subject'=>'required',
        'qualification'=>'required',
        's_medium'=>'required',
        'ssc_year'=>'required',
        'ssc_institution'=>'required',
        'ssc_group'=>'required',
        'ssc_gpa'=>'required',
        'hsc_year'=>'required',
        'hsc_institution'=>'required',
        'hsc_group'=>'required',
        'hsc_gpa'=>'required',
        'honours_year'=>'required',
        'honours_institution'=>'required',
        'honours_subject'=>'required',
        'honours_gpa'=>'required',
        'about_yourself'=>'required',
        'district'=>'required',
        'preferred_area'=>'required',
        'medium'=>'required',
        'preferred_class'=>'required',
        'preferred_subject'=>'required',
        'tuitoring_days'=>'required',
        'shift'=>'required',
        'salary'=>'required',
        'tuitoring_style'=>'required',
        'experience'=>'required',
    ]);
        
        $data = $request->all();
        $check = $this->create($data);
        return Redirect::to("admin.route")->withSuccess('Great! You have Successfully loggedin');
      

      
    }
     
    public function dashboard()
    {
 
      if(Auth::check()){
        return view('dashboard');
      }
       return Redirect::to("login")->withSuccess('Opps! You do not have access');
    }
 
    public function create(array $data)
    {
      return User::create([
        'name' => $data['user_name'],
        'gender' => $data['gender'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phone_number' => $data['phone_number'],
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
     
    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect('login');
    }
}
?>