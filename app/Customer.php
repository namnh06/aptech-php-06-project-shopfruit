<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
	protected $table = 'customers';
	protected $primaryKey = 'id';

	function bill(){
		return $this->hasMany('App\Bill','id_customer','id');
	}
}
