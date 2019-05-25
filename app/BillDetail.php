<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    //
	protected $table = 'bill_detail';
	protected $primaryKey ='id';

	function bill(){
		return $this->belongsTo('App\Bill','id_bill','id_bill');
	}

	function product(){
		return $this->belongsTo('App\ProductModel','id_product','id_product');
	}
}
