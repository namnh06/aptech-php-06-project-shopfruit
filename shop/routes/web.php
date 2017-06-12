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

//login admin page
Route::get('login-admin','UserController@loginAdminGet')->name('login-admin-get');
Route::post('login-admin','UserController@loginAdminPost')->name('login-admin-post');
//logout admin page
Route::get('logout','UserController@logout')->name('logout');
//admin group with middleware
Route::group(['prefix'=>'admin','middleware'=>'admin.login'],function(){
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
		//edit product
		Route::get('edit-product/{id}','ProductController@editProductGet')->name('edit-product-get');
		Route::post('edit-product/{id}','ProductController@editProductPost')->name('edit-product-post');
		//delete product
		Route::get('delete-product/{id}','ProductController@deleteProduct')->name('delete-product');
	});
	Route::group(['prefix'=>'category-news'],function(){
		//get list category-news
		Route::get('list-category-news','CategoryNewsController@listCategoryNews')->name('list-category-news');
		//add new category-news
		Route::get('add-new-category-news','CategoryNewsController@addNewCategoryNewsGet')->name('add-category-news-get');
		Route::post('add-new-category-news','CategoryNewsController@addNewCategoryNewsPost')->name('add-category-news-post');
		//edit category-news
		Route::get('edit-category-news/{id}','CategoryNewsController@editCategoryNewsGet')->name('edit-category-news-get');
		Route::post('edit-category-news/{id}','CategoryNewsController@editCategoryNewsPost')->name('edit-category-news-post');
		//delete category-news
		Route::get('delete-category-news/{id}','CategoryNewsController@deleteCategoryNews')->name('delete-category-news');
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

Route::group(['prefix'=>'front'],function(){
	//home
	Route::get('index','PagesController@index')->name('index');
	//template
	Route::get('template','PagesController@template')->name('template');
	//product detail
	Route::get('product-detail/{id}/{product}.html','PagesController@productDetail')->name('product-detail');
	//category
	Route::get('category/{id}/{category}.html','PagesController@category')->name('category');
	//category news
	Route::get('category-news/{id}/{categoryNews}.html','PagesController@categoryNews')->name('category-news');
	//news
	Route::get('news-detail/{id}/{news}.html','PagesController@news')->name('news');
	//policy
	Route::get('policy','PagesController@policy')->name('policy');
	//about us
	Route::get('about','PagesController@about')->name('about');
	//contact
	Route::get('contact','PagesController@contact')->name('contact');
});