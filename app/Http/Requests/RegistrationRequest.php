<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_name'=>'required',
            'phone_number'=>'required',
            'email'=>'required|unique:users',
            'password'=>['required', 'confirmed', Password::min(8)],
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
           
        ];
    }
}
