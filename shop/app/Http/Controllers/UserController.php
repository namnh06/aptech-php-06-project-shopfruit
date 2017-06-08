<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	//get list user
	function __construct()
	{
		$users = User::paginate(10);
		view()->share('users', $users);
	}

	//login admin get
	function loginAdminGet()
	{
		if(Auth::user()){
			return redirect()->back();
		} else {
		return view('admin.login');
		}
	}

	//login admin post
	function loginAdminPost(Request $request)
	{
		$this->validate($request,
			[
				'email_user'=>'required|email',
				'password'=>'required',
			]
			, []);
		if(Auth::attempt(['email_user'=>$request->email_user,'password'=>$request->password])){
			return redirect()->route('list-user');
		} else {
			return redirect()->route('login-admin-get')->with('error','Login failed');
		}
	}
	//logout
	function logout(){
		Auth::logout();
		return redirect()->route('login-admin-get')->with('announcement','Logout successfully');
	}

	//get List User
	function getListUser()
	{
		return view('admin.user.list-user');
	}

	//add new user get
	function addNewUserGet()
	{
		return view('admin.user.add-new-user');
	}

	//add new user post
	function addNewUserPost(Request $request)
	{
		$this->validate($request,
			[
				'name' => 'required',
				'email' => 'required',
				'password' => 'required',
				'rpassword' => 'same:password'
			]
			,
			[

			]);
		$user = new User();
		$user->name_user = $request->name;
		$user->email_user = $request->email;
		$user->password = bcrypt($request->password);
		$user->permission_user = $request->permission;
		$user->save();

		return redirect()->route('list-user')->with('announcement', 'Add Successfully');
	}

	//edit User
	function editUserGet($id)
	{
		$user = User::find($id);
		return view('admin.user.edit-user', ['user' => $user]);
	}

	function editUserPost(Request $request, $id)
	{
		$this->validate($request,
			[
				'name' => 'required',

			]
			,
			[
			]);
		$user = User::find($id);
		$user->name_user = $request->name;
		if ($request->changePassword == 'on') {
			$this->validate($request,
				[
					'password' => 'required',
					'rpassword' => 'same:password'
				]
				,
				[
				]);
			$user->password = bcrypt($request->password);
		}
		$user->permission_user = $request->permission;
		$user->save();

		return redirect()->route('list-user')->with('announcement', 'Edit Successfully');
	}

	//delete User
	function deleteUser($id)
	{
		$user = User::find($id);
		$user->delete();

		return redirect()->route('list-user')->with('announcement', 'Delete Successfully');
	}
}
