<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment_type;
use Faker\Generator as Faker;

$factory->define(Payment_type::class, function (Faker $faker) {
    return [
        'name' => $faker->creditCardType,
        'description' => $faker->text(10),
        'status' => rand (1, 2),
    ];
});
