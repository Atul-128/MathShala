<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    protected $fillable = ['name', 'rank', 'year', 'image', 'order', 'status'];
}
