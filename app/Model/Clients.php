<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'customer_name', 'customer_email', 'customer_phone', 'customer_address', 'customer_cnic', 'status'
    ];

    // public function sales()
    // {
    //     return $this->hasMany('App\Sale');
    // }

    // public function transactions()
    // {
    //     return $this->hasMany('App\Transaction');
    // }
}
