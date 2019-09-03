<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
    	return "lists of posts";
    }

    public function create() {
    	return view('admin.posts.create');
    }

    public function store() {
    	return request()->all();
    }
}