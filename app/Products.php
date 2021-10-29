<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function product_category(){

    	return $this->belongsTo('App\ProductCategory','cat_id');
    }
}
