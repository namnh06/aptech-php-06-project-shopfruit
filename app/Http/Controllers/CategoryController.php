<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
	function __construct()
	{
		$categories = CategoryModel::paginate(10);
		view()->share('categories',$categories);
	}

	//get list category
	function listCategory(){
		return view('admin.category.list-category');
	}

	//add category get
	function addNewCategoryGet(){
		return view('admin.category.add-new-category');
	}

	//add category post
	function addNewCategoryPost(Request $request){
		$this->validate($request,
			[
				'name'=>'required'
			],
			[
			]);
		$category = new CategoryModel();
		$category->name_category = $request->name;
		$category->save();

		return redirect()->route('list-category')->with('announcement','Add Successfully');
	}

	function editCategoryGet($id){
		$category = CategoryModel::find($id);
		return view('admin.category.edit-category',['category'=>$category]);
	}

	function editCategoryPost(Request $request,$id){
		$this->validate($request,
			[
				'name'=>'required',
			],
			[

			]);
		$category = CategoryModel::find($id);
		$category->name_category = $request->name;
		$category->save();

		return redirect()->route('list-category')->with('announcement','Edit Successfully');
	}
	//delete category
	function deleteCategory($id){
		$category = CategoryModel::find($id);
		$category->delete();

		return redirect()->route('list-category')->with('announcement','Delete Successfully');
	}

}
