<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment_type extends Model
{

    protected $fillable = [
        'name',
        'description',
        'status'
    ];
}
