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
	//Users
	Route::group(['prefix'=>'users'],function(){
		//get list user
		Route::get('list-user','UsersController@getListUser');
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
