<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount_coupon extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'expire_in'
    ];
}
