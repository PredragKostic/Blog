@extends('admin.layout')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('admin/home') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ url('admin/brands') }}">Brands</a>
      </li>
    <li class="breadcrumb-item active">Edit</li>
 </ol>

<form method="POST" action="{{ route('brands.update',$brand->id) }}">
	@csrf
	@method('PUT')

  
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $brand->title }}">
    @if($errors->has('title'))
        <span class="invalid-feedback" role="alert" style="display: block;">
            <strong>{{ $errors->first('title') }}</strong>
        </span>
    @endif
  </div>

  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="slug" class="form-control" id="slug" placeholder="Slug" name="Slug" value="{{ $brand->slug }}">
    
  </div>

   <div class="form-group">
    <label for="summary">Summary</label>
    <textarea class="form-control" id="summary" placeholder="Summary" name="summary">{{ $brand->summary }}</textarea>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible" @if($brand->is_visible) checked="checked" @endif>
    <label class="form-check-label" for="block">Is Visible</label>
  </div>

    
      
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
