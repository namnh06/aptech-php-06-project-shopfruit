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
		$bill = Bill::find($id);
		\DB::table('bill_detail')->where('id_bill',$id)->delete();
		\DB::table('bills')->where('id_bill',$id)->delete();
		\DB::table('customers')->where('id',$bill->id_customer)->delete();

		return redirect()->route('list-bill')->with('announcement','Delete was successfully');
	}

	function billDetail($id){
	$billDetail = BillDetail::where('id_bill',$id)->get();

	$products = [];
	foreach($billDetail as $key=>$value){
		$product = ProductModel::where('id_product',$value->id_product)->get();
		array_push($products,$product);
	}

	return view('admin.bill.bill-detail',compact('products','billDetail','id'));
	}

	function orderBill($id,$number){
	$bill = Bill::find($id);
	switch ($number){
		case 1:
			$bill->status = 1;
			break;
		case 2:
			$bill->status = 2;
			break;
		case 3:
			$bill->status = 3;
			break;
	}
	$bill->save();
	return redirect()->route('list-bill')->with('announcement','Order '.$id.' had changed');
	}
}
