<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index() {
    	$users = User::all();
    	return view('admin.users.index', compact('users'));
    }

    public function create() {
    	return view('admin.users.create');
    }

    public function store() {
    	$user = new User();
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));
    	$user->admin = request('admin');
    	$user->block = request()->has('block');
    	$user->save();
    	return redirect('admin/users');

    }

    public function edit($id) {
    	$user = User::find($id);
    	return view('admin.users.edit', compact('user'));
    }

    public function update($id){
    	$user = User::find($id);
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));
    	$user->admin = request('admin');
    	$user->block = request()->has('block');
    	$user->save();
    	return back();
    }

    public function destroy($id){
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/users');
    }

}
