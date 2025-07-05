<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'gender',
        'plan_type',
        'has_conditions',
        'is_smoker',
        'calculated_premium',
    ];
}
