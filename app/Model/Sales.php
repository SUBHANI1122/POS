<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'client_id', 'user_id'
    ];
    public function client() {
        return $this->belongsTo('App\Client');
    }
    // public function transactions() {
    //     return $this->hasMany('App\Transaction');
    // }
    public function products() {
        return $this->hasMany('App\Model\Products');
    }
    // public function user() {
    //     return $this->belongsTo('App\User');
    // }
}
