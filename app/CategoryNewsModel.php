<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryNewsModel extends Model
{
    //
	protected $table = 'category_news';
	protected $primaryKey = 'id_category_news';

	function news(){
		return $this->hasMany('App\NewsModel','id_category_in_news','id_category_news');
	}
}
