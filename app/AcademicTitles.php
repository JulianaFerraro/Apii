<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicTitles extends Model
{
    protected $table = "academic_titles";
    protected $fillable = [
        'title','university',
    ];
}
