<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAvailability extends Model
{
    protected $table="user_availability";
    protected $fillable= [
        'status',
    ];
}
