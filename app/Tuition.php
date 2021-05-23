<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuition extends Model
{
    protected $fillable = [
        'gender','class','subject','preferred_tuition','tuitoring_time','tuitoring_days','no_of_students','salary','location' 
     ];
  
}
