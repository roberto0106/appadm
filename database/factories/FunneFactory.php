<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Funne;
use Faker\Generator as Faker;

$factory->define(Funne::class, function (Faker $faker) {
    return [
        'order_id' => \App\Order::all()->random()->id,
        'owner' => $faker->firstName,
        'status' => rand (1, 2),
    ];
});
