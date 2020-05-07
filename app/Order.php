<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'delivery_address',
        'payment_types_id',
        'discount_coupons_id',
        'category_id',
        'product_id',
        'amount',
        'price',
        'status'
    ];
}
