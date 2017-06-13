<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
    //
	function __construct()
	{
		$products = ProductModel::paginate(10);
		$categories = CategoryModel::paginate(10);
		view()->share('products',$products);
		view()->share('categories',$categories);
	}

	//get list product
	function listProduct(){
		return view('admin.product.list-product');
	}

	//add category get
	function addNewProductGet(){
		return view('admin.product.add-new-product');
	}

	//add category post
	function addNewProductPost(Request $request){
		$this->validate($request,
			[
				'name'=>'required',
				'category'=>'required',
				'price'=>'required',
				'code'=>'required',
				'quantity'=>'required',
				's_description'=>'required',
				'image'=>'required',
				'avatar'=>'required'
			],
			[
			]);
		$product = new ProductModel();
		$product->name_vi_product = $request->name;
		$product->name_en_product = str_slug($request->name);
		$product->id_category_in_product = $request->category;
		$product->price_product = $request->price;
		$product->percent_discount_product = $request->discount;
		$product->code_product = $request->code;
		$product->status_product = $request->status;
		$product->quantity_product = $request->quantity;
		$product->short_description_product = $request->s_description;
		$product->long_description_product = $request->l_description;

		//check avatar product
		if($request->hasFile('avatar')){
			$file = $request->file('avatar');
			$ext = $file->getClientOriginalExtension();
			$extArr = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
			$extCheck = false;
			foreach($extArr as $key=>$value){
				if($ext == $value){
					$extCheck = true;
					break;
				}
			}
			if($extCheck == false){
				return redirect()->route('add-new-product-get')->with('error','Upload file has extension JPG, PNG or JPEG');
			}
			$nameAvatar = str_random(4)."_".str_slug($request->avatar).".".$ext;
			while(file_exists('upload/images/product/'.$nameAvatar)){
				$nameAvatar = str_random(4)."_".str_slug($request->avatar);
			}
			$file->move('upload/images/product/',$nameAvatar);
			$product->avatar_product = $nameAvatar;
		}
		//check image product
		if($request->hasFile('image')){
			$file = $request->file('image');
			$ext = $file->getClientOriginalExtension();
			$extArr = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
			$extCheck = false;
			foreach($extArr as $key=>$value){
				if($ext == $value){
					$extCheck = true;
					break;
				}
			}
			if($extCheck == false){
				return redirect()->route('add-new-product-get')->with('error','Upload file has extension JPG, PNG or JPEG');
			}
			$nameImage = str_random(4)."_".str_slug($request->name).".".$ext;
			while(file_exists('upload/images/product/'.$nameImage)){
				$nameImage = str_random(4)."_".str_slug($request->name);
			}
			$file->move('upload/images/product/',$nameImage);
			$product->image_product = $nameImage;
		}
		$product->save();

		return redirect()->route('list-product')->with('announcement','Add Successfully');
	}

	//edit
	function editProductGet($id){
		$product = ProductModel::find($id);
		return view('admin.product.edit-product',['product'=>$product]);
	}

	function editProductPost(Request $request,$id){
		$this->validate($request,
			[
				'name'=>'required',
				'category'=>'required',
				'price'=>'required',
				'code'=>'required',
				'quantity'=>'required',
				's_description'=>'required',
			],
			[
			]);
		$product = ProductModel::find($id);
		$product->name_vi_product = $request->name;
		$product->name_en_product = str_slug($request->name);
		$product->id_category_in_product = $request->category;
		$product->price_product = $request->price;
		$product->percent_discount_product = $request->discount;
		$product->code_product = $request->code;
		$product->status_product = $request->status;
		$product->quantity_product = $request->quantity;
		$product->short_description_product = $request->s_description;
		$product->long_description_product = $request->l_description;

		//check avatar image
		if($request->hasFile('avatar')){
			$file = $request->file('avatar');
			$ext = $file->getClientOriginalExtension();
			$extArr = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
			$extCheck = false;
			foreach($extArr as $key=>$value){
				if($ext == $value){
					$extCheck = true;
					break;
				}
			}
			if($extCheck == false){
				return redirect()->route('edit-product-get',['id'=>$product->id_product])->with('error','Upload file has extension JPG, PNG or JPEG');
			}
			$nameAvatar = str_random(4)."_".str_slug($request->avatar).".".$ext;
			while(file_exists('upload/images/product/'.$nameAvatar)){
				$nameAvatar = str_random(4)."_".str_slug($request->name);
			}
			$file->move('upload/images/product/',$nameAvatar);
			\File::delete("upload/images/product/$product->avatar_product");
			$product->avatar_product = $nameAvatar;
		}
		//check product image
		if($request->hasFile('image')){
			$file = $request->file('image');
			$ext = $file->getClientOriginalExtension();
			$extArr = ['jpg', 'JPG', 'png', 'PNG', 'jpeg', 'JPEG'];
			$extCheck = false;
			foreach($extArr as $key=>$value){
				if($ext == $value){
					$extCheck = true;
					break;
				}
			}
			if($extCheck == false){
				return redirect()->route('edit-product-get',['id'=>$product->id_product])->with('error','Upload file has extension JPG, PNG or JPEG');
			}
			$nameImage = str_random(4)."_".str_slug($request->name).".".$ext;
			while(file_exists('upload/images/product/'.$nameImage)){
				$nameImage = str_random(4)."_".str_slug($request->name);
			}
			$file->move('upload/images/product/',$nameImage);
			\File::delete("upload/images/product/$product->image_product");
			$product->image_product = $nameImage;
		}
		$product->save();

		return redirect()->route('list-product')->with('announcement','Edit Successfully');
	}
	//delete category
	function deleteProduct($id){
		$product = ProductModel::find($id);
		\File::delete("upload/images/product/$product->image_product");
		$product->delete();

		return redirect()->route('list-product')->with('announcement','Delete Successfully');
	}
}
