<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'course_id',
        'mode',
        'time',
        'date',
        'status',
        'order',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
