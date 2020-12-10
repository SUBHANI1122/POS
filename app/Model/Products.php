<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'product_name', 'description', 'category_id', 'price', 'stock' , 'status'
    ];

    public function category()
    {
        return $this->belongsTo('App\Model\Categories', 'category_id');
    }
}
