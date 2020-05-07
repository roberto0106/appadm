<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'category_id',
        'price',
        'status'
    ];

    public function categories(){
        return $this->hasOne(Category::class);
    }

}
