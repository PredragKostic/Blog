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
    	return request()->file('image');
    }
}
