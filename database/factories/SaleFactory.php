<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sale;
use Faker\Generator as Faker;

$factory->define(Sale::class, function (Faker $faker) {
    return [
        'order_id' => \App\Order::all()->random()->id,
        'accumulated_value' => 0,
        'status' => rand (1, 2),
    ];
});
