<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Account_types extends Model
{
    protected $table = 'account_type';
    protected $fillable = [
        'type','description '
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
