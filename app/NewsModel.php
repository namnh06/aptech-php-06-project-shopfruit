<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    //
	protected $table = 'news';
	protected $primaryKey = 'id_news';

	public function user(){
		return $this->belongsTo('App\User','id_user_in_news','id_user');
	}

	function categoryNews(){
		return $this->belongsTo('App\CategoryNewsModel','id_category_in_news','id_category_news');
	}
}
