<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $table = 'accounts';
    protected $fillable = [
        'account_name', 'description', 'initial_balance', 'account_type'
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
