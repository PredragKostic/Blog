<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
    public function index(){
    	$categories = Category::with('childCategory')->where('parent', null)->where('is_visible', 1)->get();
    	return view('grazia.pages.home', compact('categories'));
    }

    public function category($param1){
    	return $param1;
    }

    public function parentCategory($param1, $param2){

    	$category = Category::where('slug', $param2)->firstOrFail();
    	return $category->posts()->where('is_visible', 1)->paginate(5);
    	
    }
}
