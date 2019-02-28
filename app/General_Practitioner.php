<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General_Practitioner extends Model
{
    protected $fillable = [
        'general_practitioner_name',
        'address',
        'phone',
        'mobile',
        'mail',
        'created_at',
        'updated_at',
    ];


}
