<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
	protected $table = 'products';
	protected $primaryKey = 'id_product';

	public function category(){
		return $this->belongsTo('App\CategoryModel','id_category_in_product','id_category');
	}

	function billDetail(){
		return $this->hasMany('App\BillDetail','id_product','id_product');
	}
}
