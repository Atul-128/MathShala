<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
        protected $fillable = [
        'name',
        'student_class',
        'age',
        'school_name',
        'principal_name',
        'phone',
        'email',
        'course'
    ];
}
