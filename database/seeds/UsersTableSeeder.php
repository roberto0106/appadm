<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\User',1)->create([
            'email'=>'roberto.ht2ml@gmail.com'
        ]);
    }
}