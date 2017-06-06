<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
	protected $table = 'products';
	protected $primaryKey = 'id_product';

	public function category(){
		return $this->belongsTo('App\ProductModel','id_category_in_product','id_category');
	}
}
