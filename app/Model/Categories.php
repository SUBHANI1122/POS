<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['category_name', 'description'];


    public function products() {
        return $this->hasMany('App\Model\Products');
    }
}
