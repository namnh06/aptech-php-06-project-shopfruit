<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
	protected $table = 'bills';
	protected $primaryKey = 'id_bill';

	function customer(){
		return $this->belongsTo('App\Customer','id_customer','id');
	}

	function billDetail(){
		return $this->hasMany('App\BillDetail','id_bill','id_bill');
	}
}
