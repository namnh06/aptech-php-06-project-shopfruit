<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\ProductModel;
use Illuminate\Http\Request;

class BillController extends Controller
{
    //
	function listBill(){
		$bills = Bill::all();
		return view('admin.bill.list-bill',compact('bills'));
	}

	function deleteBill($id){
		\DB::table('bill_detail')->where('id_bill',$id)->delete();
		\DB::table('bills')->where('id_bill',$id)->delete();

		return redirect()->route('list-bill')->with('announcement','Delete was successfully');
	}

	function billDetail($id){
	$billDetail = BillDetail::where('id_bill',$id)->get();

	$products = [];
	foreach($billDetail as $key=>$value){
		$product = ProductModel::where('id_product',$value->id_product)->get();
		array_push($products,$product);
	}

	return view('admin.bill.bill-detail',compact('products','billDetail'));

	}
}
