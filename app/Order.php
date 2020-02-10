<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'product_id', 'buyer_id', 'tnx_id', 'receipent_name', 'address', 'contact_no', 'email', 'qty', 'total_amount', 'status' ];

    public function buyer()
    {
        return $this->belongsTo('App\Buyer');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
