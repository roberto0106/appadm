<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'id_order' => rand (1, 30),
        'customer_id' => \App\Customer::all()->random()->id,
        'delivery_address' => $faker->streetAddress,
        'payment_types_id' => \App\Payment_type::all()->random()->id,
        'discount_coupons_id' => \App\Discount_coupon::all()->random()->id,
        'category_id' => \App\Category::all()->random()->id,
        'product_id' => \App\Product::all()->random()->id,
        'amount' => rand (1, 5),
        'price' => 0,
        'status' => rand (1, 2),
    ];
});
