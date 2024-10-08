<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name',
        'gender',
        'day_of_birth',
        'place_of_birth',
        'address',
        'status',
        'entry_date'
    ];
}
