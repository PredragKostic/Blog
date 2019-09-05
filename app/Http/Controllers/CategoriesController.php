<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index() {
    	return "lists of categories";
    }

    public function create() {
    	return view('admin.categories.create');
    }

    public function store() {
    	return request()->all();
    }
}