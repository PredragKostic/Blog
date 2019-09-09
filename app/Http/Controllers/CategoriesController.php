<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use App\Http\Requests\CreateCategoryRequest;


class CategoriesController extends Controller
{
    public function index() {
    	$categories = Category::all();
    	return view('admin.categories.index', compact('categories'));
    }

    public function create() {
    	return view('admin.categories.create');
    }

    public function store(CreateCategoryRequest $request) {
    	$category = new Category();
    	$category->title = request('title');
    	$category->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$category->description = request('description');
    	$category->is_visible = request()->has('is_visible');
    	
    	$category->save();
    	return redirect('admin/categories');
    }

     public function edit($id) {
    	$category = Category::findOrFail($id);
    	return view('admin.categories.edit', compact('category'));
    }

    public function update(CreateCategoryRequest $request, $id){
    	$category = Category::findOrFail($id);
    	$category->title = request('title');
    	$category->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$category->description = request('description');
    	$category->is_visible = request()->has('is_visible');
    	
    	$category->save();
    	return back();
    }

    public function destroy($id){
    	$category = Category::findOrFail($id);
    	$category->delete();
    	return redirect('admin/categories');
    }

}