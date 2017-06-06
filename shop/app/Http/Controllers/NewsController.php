<?php

namespace App\Http\Controllers;

use App\NewsModel;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
	function __construct()
	{
		$allNews = NewsModel::paginate(10);
		view()->share('allNews',$allNews);
	}

	//get list product
	function listNews(){
		return view('admin.news.list-news');
	}

	//add category get
	function addNewsGet(){
		return view('admin.news.add-news');
	}

	//add category post
	function addNewsPost(Request $request){
		$this->validate($request,
			[
				'title'=>'required',
				'description'=>'required',
				'content_news'=>'required',
				'image'=>'required',
			],
			[
			]);
		$news = new NewsModel();
		//temporary with username until using middleware and login
		$news->id_user_in_news = 4;
		$news->title_vi_news = $request->title;
		$news->title_en_news = str_slug($request->name);
		$news->short_description_news = $request->description;
		$news->content_news = $request->content_news;

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
				return redirect()->route('add-news-get')->with('error','Upload file has extension JPG, PNG or JPEG');
			}
			$nameImage = str_random(4)."_".str_slug($request->title_vi_news).".".$ext;
			while(file_exists('upload/images/product/'.$nameImage)){
				$nameImage = str_random(4)."_".str_slug($request->name);
			}
			$file->move('upload/images/news/',$nameImage);
			$news->images_news = $nameImage;
		}
		$news->save();

		return redirect()->route('list-news')->with('announcement','Add Successfully');
	}

	//edit
	function editProductGet($id){
		$news = ProductModel::find($id);
		return view('admin.product.edit-product',['product'=>$news]);
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
		$news = ProductModel::find($id);
		$news->name_vi_product = $request->name;
		$news->name_en_product = str_slug($request->name);
		$news->id_category_in_product = $request->category;
		$news->price_product = $request->price;
		$news->percent_discount_product = $request->discount;
		$news->code_product = $request->code;
		if(strtolower($request->status) == 'hot'){
			$news->status_product = '1';
		} else {
			$news->status_product = '0';
		}
		$news->quantity_product = $request->quantity;
		$news->short_description_product = $request->s_description;
		$news->long_description_product = $request->l_description;


		//check file image
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
				return redirect()->route('edit-product-get',['id'=>$news->id_product])->with('error','Upload file has extension JPG, PNG or JPEG');
			}
			$nameImage = str_random(4)."_".str_slug($request->name).".".$ext;
			while(file_exists('upload/images/product/'.$nameImage)){
				$nameImage = str_random(4)."_".str_slug($request->name);
			}
			$file->move('upload/images/product/',$nameImage);
			\File::delete("upload/images/product/$news->images_product");
			$news->images_product = $nameImage;
		}
		$news->save();

		return redirect()->route('list-product')->with('announcement','Edit Successfully');
	}
	//delete category
	function deleteNews($id){
		$news = NewsModel::find($id);
		\File::delete("upload/images/news/$news->images_news");
		$news->delete();

		return redirect()->route('list-news')->with('announcement','Delete Successfully');
	}
}
