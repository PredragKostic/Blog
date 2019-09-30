<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;

class PagesController extends Controller
{
    public function index(){
    	$categories = Category::with('childCategory')->where('parent', null)->where('is_visible', 1)->get();

        $sliders = Post::with('category')->where('is_visible', 1)->orderBy('id', 'desc')->limit(5)->get();

        $hotNews = Post::with('category')->where('is_visible', 1)->orderBy('id', 'desc')->limit(2)->get();
    	return view('grazia.pages.home', compact('categories', 'sliders', 'hotNews'));

    }

    public function category($param1){
    	return $param1;
    }

    public function parentCategory($param1, $param2){

    	$category = Category::where('slug', $param2)->firstOrFail();
    	return $category->posts()->where('is_visible', 1)->paginate(5);
    	
    }
}
