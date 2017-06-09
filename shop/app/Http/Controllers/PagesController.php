<?php

namespace App\Http\Controllers;

use App\ProductModel;
use Illuminate\Http\Request;

class PagesController extends Controller
{

	function __construct(){

	}
    //template
	function template(){
		return view('front.template.template-front');
	}

	//home
	function index(){
		$promotionProducts = ProductModel::orderByDesc('percent_discount_product')->take(5)->get();
		$bestSellerProducts = ProductModel::orderByDesc('name_en_product')->take(5)->get();
		$comingProducts = ProductModel::orderByDesc('created_at')->take(5)->get();

		return view('front.index-front',['promotionProducts'=>$promotionProducts,'bestSellerProducts'=>$bestSellerProducts,'comingProducts'=>$comingProducts]);
	}

	//product detail
	function productDetail($id){
		$product = ProductModel::find($id);
		$similarProducts = ProductModel::where('id_category_in_product',$product->id_category_in_product)->take(3)->get();
		$bestSellerProducts = ProductModel::orderByDesc('name_en_product')->take(3)->get();
		return view('front.product-detail',['product'=>$product,'similarProducts'=>$similarProducts,'bestSellerProducts'=>$bestSellerProducts]);
	}
}
