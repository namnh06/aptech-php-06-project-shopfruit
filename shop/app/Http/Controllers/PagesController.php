<?php

namespace App\Http\Controllers;

use App\Bill;
use App\BillDetail;
use App\Cart;
use App\CategoryModel;
use App\Customer;
use App\NewsModel;
use App\ProductModel;
use App\CategoryNewsModel;
use Illuminate\Http\Request;
use Session;

class PagesController extends Controller
{

	function __construct(){
		$products = ProductModel::all();
		view()->share('products',$products);
		$categories = CategoryModel::orderBy('name_category')->get();
		view()->share('categories',$categories);
		$categoriesNews = CategoryNewsModel::all();
		view()->share('categoriesNews',$categoriesNews);
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

	//category
	function category($id){
		$categoryDetail = CategoryModel::find($id);
		$productsCategory = ProductModel::where('id_category_in_product',$id)->paginate(3);
		return view('front.category-front',['categoryDetail'=>$categoryDetail,'productsCategory'=>$productsCategory]);
	}

	//category news
	function categoryNews($id){
		$categoryNews = CategoryNewsModel::find($id);
		$allNews = NewsModel::where('id_category_in_news',$id)->paginate(3);
		return view('front.category-news-front',['categoryNews'=>$categoryNews,'allNews'=>$allNews]);
	}

	//news
	function news($id){
		$news = NewsModel::find($id);
		return view('front.news-front',['news'=>$news]);
	}

	//policy
	function policy()
	{
		return view('front.policy');
	}
		//about us
	function about()
	{
		return view('front.about');
	}
		//contact
	function contact()
	{
		return view('front.contact');
	}

	function getAddToCart(Request $request,$id){
		$product = ProductModel::find($id);
		$oldCart = Session('cart')?Session::get('cart'):null;

		$cart = new Cart($oldCart);
		$cart->addToCart($product,$id);
		$request->session()->put('cart',$cart);
		return redirect()->back();

	}

	function getRemoveItem($id){
		$oldCart = Session::get('cart')?Session::get('cart'):null;
		$cart = new Cart($oldCart);
		$cart->removeItem($id);
		if(count($cart->items)>0){
			Session::put('cart',$cart);
		} else {
			Session::forget('cart');
		}
		return redirect()->back();
	}

	function getReduceByOne($id){
		$oldCart = Session::get('cart')?Session::get('cart'):null;
		$cart = new Cart($oldCart);
		$cart->reduceByOne($id);
		if(count($cart->items)>0){
			Session::put('cart',$cart);
		} else {
			Session::forget('cart');
		}
		return redirect()->back();
	}

	function getShoppingCart(){
		return view('front.shopping-cart');
	}

	function getCheckout(){
		return view('front.checkout');
	}

	function postCheckout(Request $request){
		$cart = Session::get('cart');

		$customer = new Customer();
		$customer->first_name = $request->firstName;
		$customer->last_name = $request->lastName;
		$customer->email = $request->email;
		$customer->telephone = $request->phone;
		$customer->address = $request->address;
		$customer->save();

		$bill = new Bill();
		$bill->id_customer = $customer->id;
		$bill->date_bill = date('Y-m-d');
		$bill->total_price_bill = $cart->totalPrice;
		$bill->status = 1;
		$bill->save();

		foreach($cart->items as $key=>$value){
			$billDetail = new BillDetail();
			$billDetail->id_bill = $bill->id_bill;
			$billDetail->id_product = $key;
			$billDetail->quantity = $value['quantity'];
			$billDetail->unit_price = $value['price']/$value['quantity'];
			$billDetail->save();
		}

		Session::forget('cart');
		return redirect()->route('index')->with('announcement','Your order was successfully');

	}
}

