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
}
