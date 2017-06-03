<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    //get list user
	function __construct()
	{
		$users = User::paginate(10);
		view()->share('users',$users);
	}
	//get List User
	function getListUser(){
		return view('admin.users.list-user');
	}
	//add new user get
	function addNewUserGet(){
		return view('admin.users.add-new-user');
	}
	//add new user post
	function addNewUserPost(Request $request){
		$this->validate($request,
			[
				'name'=>'required',
				'email'=>'required',
				'password'=>'required',
				'rpassword'=>'same:password'
			]
			,
			[
				'name.required'=>'Name field is required',
				'email.required'=>'Email field is required',
				'password.required'=>'Name field is required',
			]);
		$user = new User();
		$user->name_user = $request->name;
		$user->email_user = $request->email;
		$user->password_user = bcrypt($request->password);
		$user->permission_user = $request->radio2;
		$user->save();

		return redirect()->route('list-user');
	}
	//delete User
	function deleteUser($id){
		$user = User::find($id);
		$user->delete();

		return redirect()->route('list-user');
	}
	//edit User
	function editUserGet($id){
		$user = User::find($id);
		return view('admin.users.edit-user',['user'=>$user]);
	}

	function editUserPost($id){
		$this->validate($request,
			[
				'name'=>'required',
				'rpassword'=>'same:password'
			]
			,
			[
				'name.required'=>'Name field is required',
			]);
		$user = User::find($id);
	}
}
