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
	//users
	Route::group(['prefix'=>'users'],function(){
		//get list user
		Route::get('list-user','UsersController@getListUser')->name('list-user');
		//add new user
		Route::get('add-new-user-get','UsersController@addNewUserGet')->name('add-new-user-get');
		Route::post('add-new-user-post','UsersController@addNewUserPost')->name('add-new-user-post');
		//delete user
		Route::get('delete-user/{id}','UsersController@deleteUser')->name('delete-user');
		//edit user
		Route::get('edit-user-get/{id}','UsersController@editUserGet')->name('edit-user-get');
		Route::post('edit-user-post/{id}','UsersController@editUserPost')->name('edit-user-post');
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