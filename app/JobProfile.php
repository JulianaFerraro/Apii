<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobProfile extends Model
{
    protected $table="job_profile";
    protected $fillable = [
        'description',
    ];
}
