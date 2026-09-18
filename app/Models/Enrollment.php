<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
        protected $fillable = [
        'name',
        'student_class',
        'age',
        'gender',
        'school_name',
        'principal_name',
        'math_marks',
        'overall_marks',
        'school_id_card',
        'report_card',
        'father_name',
        'father_qualification',
        'father_occupation',
        'father_contact',
        'father_address',
        'mother_name',
        'mother_qualification',
        'mother_occupation',
        'mother_contact',
        'mother_address',
        'local_guardian_details',
        'obs_math',
        'obs_other',
        'obs_overall',
        'why_mathshala',
        'key_expectations',
        'precautions',
        'other_requests',
        'phone',
        'email',
        'course',
        'enrollment_type',
        'amount',
        'payment_id',
        'payment_status'
    ];
}
