<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(200),
        'category_id' => \App\Category::all()->random()->id,
        'price' => $faker->randomFloat(2,100,1000),
        'status' => rand (1, 2)
    ];
});
