<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','gender', 'email','profile', 'password', 'role_id','institution','studentId','subject','nationalId','qualification','s_medium','ssc_year','ssc_institution','ssc_group','ssc_gpa','hsc_year','hsc_institution','hsc_group','hsc_gpa','honours_year','honours_institution','honours_subject','honours_gpa','about_yourself','district','preferred_area','medium','preferred_class','preferred_subject','tuitoring_days','shift','salary','tuitoring_style','experience'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

}
