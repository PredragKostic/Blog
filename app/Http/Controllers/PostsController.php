<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;
use App\Category;
use App\Tag;
use App\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{
    public function index() {
    	$posts = Post::paginate(2);
    	return view('admin.posts.index', compact('posts'));
    }

    public function create() {
    	$categories = Category::where('is_visible', 1)->get();
    	$tags = Tag::where('is_visible', 1)->get();
    	return view('admin.posts.create', compact('categories', 'tags'));
    }

    public function store(CreatePostRequest $request) {
    	
    	$post = new Post();
    	$post->user_id = auth()->user()->id;
    	$post->title = request('title');
    	$post->category_id = request('category_id');
    	$post->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$post->summary = request('summary');
    	$post->content = request('content');
    	$post->views = request('views');
    	$post->published_at = request('published_at');
    	$post->is_visible = request()->has('is_visible');
    	
    	$post->save();

    	$post->tags()->sync(request('tag_id'));
    	return redirect('admin/posts');

    }

    public function edit($id){
    	$post = Post::findOrFail($id);

    	$categories = Category::where('is_visible', 1)->get();
    	$tags = Tag::where('is_visible', 1)->get();
    	return view('admin.posts.edit', compact('categories', 'tags', 'post'));
    }

    public function update(CreatePostRequest $request, $id) {
    	
    	$post = Post::find($id);
    	$post->user_id = auth()->user()->id;
    	$post->title = request('title');
    	$post->category_id = request('category_id');
    	$post->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$post->summary = request('summary');
    	$post->content = request('content');
    	$post->views = request('views');
    	$post->published_at = request('published_at');
    	$post->is_visible = request()->has('is_visible');
    	
    	$post->save();

    	$post->tags()->sync(request('tag_id'));
    	return back();

    }

    public function destroy($id){
		$post = Post::findOrFail($id);
		$post->delete();
		return redirect('admin/posts');
    }
}