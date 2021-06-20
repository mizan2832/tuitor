<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestTuitor extends Model
{
    protected $fillable = ['name','location','gender','subject','phoneNumber','salary','tuitoringDays','tuitoringType'];
}
