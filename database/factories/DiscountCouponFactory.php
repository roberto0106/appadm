<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discount_coupon;
use Faker\Generator as Faker;

$factory->define(Discount_coupon::class, function (Faker $faker) {
    return [
        'name' => $faker->hexColor,
        'description' => $faker->text(50),
        'expire_in' => $faker->date($format = 'Y-m-d','2050-01-01'),
        'status' => rand (1, 2),
    ];
});
