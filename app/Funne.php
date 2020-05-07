<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funne extends Model
{
    protected $fillable = [
        'order_id',
        'owner',
        'status'
    ];
}
