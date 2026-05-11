<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'employee_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'birth_date',
        'gender',
        'department',
        'specialization',
        'hire_date',
        'status',
    ];
}
