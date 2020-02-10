<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Buyer extends Authenticatable
{
    protected $guard = 'buyer';

    protected $fillable = [
                        'first_name',
                        'last_name',
                        'address',
                        'contact_no',
                        'email', 
                        'password', 
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order');
    }

}
