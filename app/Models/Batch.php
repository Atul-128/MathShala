<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'category',
        'venue',
        'time',
        'date',
        'fee',
        'status',
        'order',
    ];
}
