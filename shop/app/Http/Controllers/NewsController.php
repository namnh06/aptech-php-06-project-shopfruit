<?php

namespace App\Http\Controllers;

use App\NewsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\CategoryNewsModel;

class NewsController extends Controller
{
    //
	function __construct()
	{
		$allNews = NewsModel::paginate(10);
		view()->share('allNews',$allNews);
		$categoriesNews = CategoryNewsModel::all();
		view()->share('categoriesNews',$categoriesNews);
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
				'category'=>'required',
				'description'=>'required',
				'content_news'=>'required',
				'image'=>'required',
			],
			[
			]);
		$news = new NewsModel();
		$news->id_user_in_news = Auth::user()->id_user;
		$news->title_vi_news = $request->title;
		$news->title_en_news = str_slug($request->title);
		$news->id_category_in_news = $request->category;
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
	function editNewsGet($id){
		$news = NewsModel::find($id);
		return view('admin.news.edit-news',['news'=>$news]);
	}

	function editNewsPost(Request $request,$id){
		$this->validate($request,
			[
				'title'=>'required',
				'category'=>'required',
				'description'=>'required',
				'content_news'=>'required',
			],
			[
			]);
		$news = NewsModel::find($id);
		$news->id_user_in_news = Auth::user()->id_user;
		$news->title_vi_news = $request->title;
		$news->title_en_news = str_slug($request->title);
		$news->id_category_in_news = $request->category;
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

		return redirect()->route('list-news')->with('announcement','Edit Successfully');
	}
	//delete category
	function deleteNews($id){
		$news = NewsModel::find($id);
		File::delete("upload/images/news/$news->images_news");
		$news->delete();

		return redirect()->route('list-news')->with('announcement','Delete Successfully');
	}
}
