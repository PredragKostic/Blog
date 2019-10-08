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
        <a href="{{ url('admin/products') }}">Products</a>
      </li>
    <li class="breadcrumb-item active">Edit</li>
 </ol>

<form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
	@csrf

  @method('PUT')
	
  <div class="form-group">
    <label for="brand_id">Brand</label>
    <select name="brand_id" id="brand_id" class="form-control js-example-basic-single">
      @foreach($brands as $brand)
        <option value="{{ $brand->id }}" @if($brand->id == $products->brand_id) selected="selected" @endif>{{ $brand->title }}</option>
      @endforeach
    </select>
    @if($errors->has('category_id'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('brand_id') }}</strong>
        </span>
    @endif
  </div>

  
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $product->title }}">
    @if($errors->has('title'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="slug" class="form-control" id="slug" placeholder="Slug" name="Slug" value="{{ $product->slug }}">
    
  </div>

   <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" placeholder="Description" name="description">{{ $product->description }}</textarea>
    @if($errors->has('description'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    @if($product->image)
      <img src="{{ url($product->image) }}" alt="{{ $product->title }}" width="200" height="auto">
    @endif
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" placeholder="Image" name="image">
    @if($errors->has('image'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('image1') }}</strong>
        </span>
    @endif
  </div>

 

   <div class="form-group">
    <label for="views">Views</label>
    <input type="text" class="form-control" id="views" placeholder="Views" name="views" value="{{ $product->views }}">
    @if($errors->has('views'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('views') }}</strong>
        </span>
    @endif
  </div>

  
  <div class="form-group">
    <label for="published_at">Published At</label>
    <input type="text" class="form-control" id="published_at" placeholder="Published At" name="published_at" value="{{ $product->published_at }}">
    @if($errors->has('published_at'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('published_at') }}</strong>
        </span>
    @endif
  </div>

    <div class="form-group form-check">
    <input @if($product->is_visible) checked="checked" @endif type="checkbox" class="form-check-input" id="is_visible" name="is_visible">
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
