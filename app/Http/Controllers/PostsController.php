<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Str;
use App\Category;
use App\Tag;
use App\Http\Requests\CreatePostRequest;
use File;

class PostsController extends Controller
{
    public function index() {
        if(auth()->user()->admin){
            $posts = Post::paginate(2);
        }else{
            $posts = Post::where('user_id', auth()->user()->id)->paginate(2);
        }
    	
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
        $post->image1 = request()->has('image1') ? $post->getImagePath('image1') : null;
        $post->image2 = request()->has('image2') ? $post->getImagePath('image2') : null;
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

        if(!auth()->user()->admin || $post->user_id != auth()->user()->id){
            return redirect('admin/posts');
        }

    	$categories = Category::where('is_visible', 1)->get();
    	$tags = Tag::where('is_visible', 1)->get();
    	return view('admin.posts.edit', compact('categories', 'tags', 'post'));
    }

    public function update(CreatePostRequest $request, $id) {
    	
    	$post = Post::findOrFail($id);

        if(!auth()->user()->admin || $post->user_id != auth()->user()->id){
            return redirect('admin/posts');
        }

    	$post->user_id = auth()->user()->id;
    	$post->title = request('title');
    	$post->category_id = request('category_id');
    	$post->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$post->summary = request('summary');
        if(request()->has('image1')){
            File::delete($post->image1);
            $post->image1 = $post->getImagePath('image1');

        }

        if(request()->has('image2')){
            File::delete($post->image2);
            $post->image2 = $post->getImagePath('image2');

        }

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

        if(!auth()->user()->admin || $post->user_id != auth()->user()->id){
            return redirect('admin/posts');
        }

		$post->delete();
		return redirect('admin/posts');
    }
}