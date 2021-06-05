<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name','city','country','student','student_study_fields','profession','hobby','interests','pro','relevant_websites','notes','profile'
    ];
}
