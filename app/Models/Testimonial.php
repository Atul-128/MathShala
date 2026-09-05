<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'rank',
        'year',
        'quote',
        'image',
        'status',
        'order'
    ];
}
