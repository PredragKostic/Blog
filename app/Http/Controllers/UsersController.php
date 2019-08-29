<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
    	return "lists of users";
    }

    public function create() {
    	return view('admin.users.create');
    }

    public function store() {
    	return request()->all();
    }
}
