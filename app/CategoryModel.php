<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    //
	protected $table = 'categories';
	protected $primaryKey = 'id_category';

	public function product(){
		return $this->hasMany('App\ProductModel','id_category_in_product','id_category');
	}
}
