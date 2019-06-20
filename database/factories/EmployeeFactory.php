<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,
        'salary' => $faker->randomNumber(6, false),
        'department' => 'Engineering',
        'payment_frequency' => $faker->dayOfWeek($max = 'now'),
        'tax' => $faker->randomNumber(1, true),
        'leave_allowance' => $faker->randomNumber(5, false),
        'bonus' => $faker->randomNumber(5, false),
        'created_by' => $faker->unique()->randomNumber(5, false),
    ];
});
