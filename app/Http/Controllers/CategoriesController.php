<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;
use App\Http\Requests\CreateCategoryRequest;


class CategoriesController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index() {
    	$categories = Category::paginate(50);
    	return view('admin.categories.index', compact('categories'));
    }

    public function create() {
        $categories = Category::where('is_visible', 1)->where('parent', null)->get();
    	return view('admin.categories.create', compact('categories'));
    }

    public function store(CreateCategoryRequest $request) {
    	$category = new Category();
        $category->parent = request('parent');
    	$category->title = request('title');
    	$category->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$category->description = request('description');
    	$category->is_visible = request()->has('is_visible');
    	
    	$category->save();
    	return redirect('admin/categories');
    }

     public function edit($id) {
    	$category = Category::findOrFail($id);
        $categories = Category::where('is_visible', 1)->where('parent', null)
            ->where('id', '<>', $category->id)->get();
    	return view('admin.categories.edit', compact('category', 'categories'));
    }

    public function update(CreateCategoryRequest $request, $id){
    	$category = Category::findOrFail($id);
        $category->parent = request('parent');
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