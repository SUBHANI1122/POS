<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    protected $table = 'suppliers';
    protected $fillable = [
        'supplier_name', 'supplier_email', 'supplier_phone', 'supplier_address', 'supplier_cnic', 'status', 'supplier_company'
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
