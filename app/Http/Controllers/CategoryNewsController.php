<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryNewsModel;

class CategoryNewsController extends Controller
{
    //
	function __construct()
	{
		$categoriesNews = CategoryNewsModel::paginate(10);
		view()->share('categoriesNews',$categoriesNews);
	}

	//get list category-news
	function listCategoryNews(){
		return view('admin.category-news.list-category-news');
	}

	//add category-news get
	function addNewCategoryNewsGet(){
		return view('admin.category-news.add-category-news');
	}

	//add category-news post
	function addNewCategoryNewsPost(Request $request){
		$this->validate($request,
			[
				'name'=>'required'
			],
			[
			]);
		$categoryNews = new CategoryNewsModel();
		$categoryNews->name_category_news = $request->name;
		$categoryNews->save();

		return redirect()->route('list-category-news')->with('announcement','Add Successfully');
	}

	function editCategoryNewsGet($id){
		$categoryNews = CategoryNewsModel::find($id);
		return view('admin.category-news.edit-category-news',['categoryNews'=>$categoryNews]);
	}

	function editCategoryNewsPost(Request $request,$id){
		$this->validate($request,
			[
				'name'=>'required',
			],
			[

			]);
		$categoryNews = CategoryNewsModel::find($id);
		$categoryNews->name_category_news = $request->name;
		$categoryNews->save();

		return redirect()->route('list-category-news')->with('announcement','Edit Successfully');
	}
	//delete category-news
	function deleteCategoryNews($id){
		$categoryNews = CategoryNewsModel::find($id);
		$categoryNews->delete();

		return redirect()->route('list-category-news')->with('announcement','Delete Successfully');
	}

}
