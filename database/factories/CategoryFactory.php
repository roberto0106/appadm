<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'description' => $faker->text(100),
        'status' => rand (1, 2)
    ];
});
