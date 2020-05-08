<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'email' => $faker->email,
        'address' => $faker->streetAddress,
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'phone' => $faker->randomNumber(9),
        'level' => rand (1, 2),
        'status' => rand (1, 2),
    ];
});
