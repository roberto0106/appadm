<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'order_id',
        'accumulated_value',
        'status'
    ];
}