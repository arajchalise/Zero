<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'stock',];

    public function photo()
    {
        return $this->hasMany('App\Photo');
    }

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
