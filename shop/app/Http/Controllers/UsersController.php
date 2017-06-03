<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //get list user
	function __construct()
	{
		$users = User::all();
		view()->share('users',$users);
	}

	function getListUser(){
		$users = User::all();
		return view('admin.users.users');
	}
}
