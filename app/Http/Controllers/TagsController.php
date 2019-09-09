<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Str;
use App\Http\Requests\CreateTagRequest;

class TagsController extends Controller
{
    public function index() {
    	$tags = Tag::paginate(2);
    	return view('admin.tags.index', compact('tags'));
    }

    public function create() {
    	return view('admin.tags.create');
    }

    public function store(CreateTagRequest $request) {
    	$tag = new Tag();
    	$tag->title = request('title');
    	$tag->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$tag->is_visible = request()->has('is_visible');
    	
    	$tag->save();
    	return redirect('admin/tags');
    }

     public function edit($id) {
    	$tag = Tag::findOrFail($id);
    	return view('admin.tags.edit', compact('tag'));
    }

    public function update(CreateTagRequest $request, $id){
    	$tag = Tag::findOrFail($id);
    	$tag->title = request('title');
    	$tag->slug = request('slug') ? Str::slug(request('slug')) : Str::slug(request('title'));
    	$tag->is_visible = request()->has('is_visible');
    	
    	$tag->save();
    	return back();
    }

    public function destroy($id){
    	$tag = Tag::findOrFail($id);
    	$tag->delete();
    	return redirect('admin/tags');
    }
}
