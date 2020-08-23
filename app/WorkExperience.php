<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $table="work_experience";
    protected $fillable= [
        'start_date', 'ending_date', 'activities', 'business',
    ];
}
