<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        factory('App\Category',10)->create();
        factory('App\Product',10)->create();
        factory('App\Customer',10)->create();
        factory('App\Payment_type',3)->create();
        factory('App\Discount_coupon',10)->create();
        factory('App\Order',10)->create();
        factory('App\Funne',5)->create();
        factory('App\Sale',50)->create();

    }
}
