<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});
//admin group with middleware
Route::group(['prefix'=>'admin'],function(){
	//user
	Route::group(['prefix'=>'user'],function(){
		//get list user
		Route::get('list-user','UserController@getListUser')->name('list-user');
		//add new user
		Route::get('add-new-user-get','UserController@addNewUserGet')->name('add-new-user-get');
		Route::post('add-new-user-post','UserController@addNewUserPost')->name('add-new-user-post');
		//edit user
		Route::get('edit-user-get/{id}','UserController@editUserGet')->name('edit-user-get');
		Route::post('edit-user-post/{id}','UserController@editUserPost')->name('edit-user-post');
		//delete user
		Route::get('delete-user/{id}','UserController@deleteUser')->name('delete-user');
	});
	Route::group(['prefix'=>'category'],function(){
		//get list category
		Route::get('list-category','CategoryController@listCategory')->name('list-category');
		//add new category
		Route::get('add-new-category','CategoryController@addNewCategoryGet')->name('add-new-category-get');
		Route::post('add-new-category','CategoryController@addNewCategoryPost')->name('add-new-category-post');
		//edit user
		Route::get('edit-category/{id}','CategoryController@editCategoryGet')->name('edit-category-get');
		Route::post('edit-category/{id}','CategoryController@editCategoryPost')->name('edit-category-post');
		//delete user
		Route::get('delete-category/{id}','CategoryController@deleteCategory')->name('delete-category');
	});
	Route::group(['prefix'=>'product'],function(){
		//get list category
		Route::get('list-product','ProductController@listProduct')->name('list-product');
		//add new category
		Route::get('add-new-product','ProductController@addNewProductGet')->name('add-new-product-get');
		Route::post('add-new-product','ProductController@addNewProductPost')->name('add-new-product-post');
		//edit user
		Route::get('edit-product/{id}','ProductController@editProductGet')->name('edit-product-get');
		Route::post('edit-product/{id}','ProductController@editProductPost')->name('edit-product-post');
		//delete product
		Route::get('delete-product/{id}','ProductController@deleteProduct')->name('delete-product');
	});
	Route::group(['prefix'=>'news'],function(){
		//get list news
		Route::get('list-news','NewsController@listNews')->name('list-news');
		//add new news
		Route::get('add-news','NewsController@addNewsGet')->name('add-news-get');
		Route::post('add-news','NewsController@addNewsPost')->name('add-news-post');
		//edit news
		Route::get('edit-news/{id}','NewsController@editNewsGet')->name('edit-news-get');
		Route::post('edit-news/{id}','NewsController@editNewsPost')->name('edit-news-post');
		//delete news
		Route::get('delete-news/{id}','NewsController@deleteNews')->name('delete-news');
	});
});
//test
Route::get('test', function () {
	return view('admin.template.index-admin');
});
Route::get('test1',function(){
	return view('admin.layout.editable-table');
});
Route::get('test2',function (){
	return view('admin.template.test');
});
Route::get('test4',function(){
	return view('');
});