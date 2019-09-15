@extends('admin.layout')

@section('css')

<link href="{{ url('admin/css/select2.min.css') }}" rel="stylesheet" type="text/css">

<link href="{{ url('admin/css/calendar.min.css') }}" rel="stylesheet" type="text/css">

@endsection

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('admin/home') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ url('admin/posts') }}">Posts</a>
      </li>
    <li class="breadcrumb-item active">Edit</li>
 </ol>

<form method="POST" action="{{ route('posts.update', $post->id) }}">
	@csrf

  @method('PUT')
	
  <div class="form-group">
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id" class="form-control js-example-basic-single">
      @foreach($categories as $category)
        <option value="{{ $category->id }}" @if($category->id == $post->category_id) selected="selected" @endif>{{ $category->title }}</option>
      @endforeach
    </select>
    @if($errors->has('category_id'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="tag_id">Tag</label>
    <select name="tag_id[]" id="tag_id" class="form-control js-example-basic-multiple" multiple="multiple">
      @foreach($tags as $tag)
        <option value="{{ $tag->id }}" @if($post->tags->contains($tag->id)) selected="selected" @endif>{{ $tag->title }}</option>
      @endforeach
    </select>
    @if($errors->has('tag_id'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('tag_id') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post->title }}">
    @if($errors->has('title'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="slug" class="form-control" id="slug" placeholder="Slug" name="Slug" value="{{ $post->slug }}">
    
  </div>

   <div class="form-group">
    <label for="summary">Summary</label>
    <textarea class="form-control" id="summary" placeholder="Summary" name="summary">{{ $post->summary }}</textarea>
    @if($errors->has('summary'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('summary') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" placeholder="Content" name="content">{{ $post->content }}</textarea>
    @if($errors->has('content'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('content') }}</strong>
        </span>
    @endif
  </div>

   <div class="form-group">
    <label for="views">Views</label>
    <input type="text" class="form-control" id="views" placeholder="Views" name="views" value="{{ $post->views }}">
    @if($errors->has('views'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('views') }}</strong>
        </span>
    @endif
  </div>

  
  <div class="form-group">
    <label for="published_at">Published At</label>
    <input type="text" class="form-control" id="published_at" placeholder="Published At" name="published_at" value="{{ $post->published_at }}">
    @if($errors->has('published_at'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('published_at') }}</strong>
        </span>
    @endif
  </div>

    <div class="form-group form-check">
    <input @if($post->is_visible) checked="checked" @endif type="checkbox" class="form-check-input" id="is_visible" name="is_visible">
    <label class="form-check-label" for="block">Is Visible</label>
  </div>
      
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection

@section('js')

<script src="{{ url('admin/js/select2.min.js') }}"></script>

<script src="{{ url('admin/js/calendar.min.js') }}"></script>

<script>
  // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
    $('.js-example-basic-multiple').select2();
     $("#published_at").datetimepicker({
        format: "yyyy-mm-dd hh:ii"
    });
});
</script>

@endsection
