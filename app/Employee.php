<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'salary', 'department', 'payment_frequency',
        'tax', 'leave_allowance', 'bonus'
    ];
}
