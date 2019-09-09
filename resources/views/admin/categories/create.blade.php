@extends('admin.layout')

@section('content')

<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('admin/home') }}">Dashboard</a>
      </li>
      <li class="breadcrumb-item">
        <a href="{{ url('admin/categories') }}">Categories</a>
      </li>
    <li class="breadcrumb-item active">Create</li>
 </ol>

<form method="POST" action="{{ route('categories.store') }}">
	@csrf
	
  <div class="form-group">
  	<label for="email">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
  </div>

  <div class="form-group">
    <label for="slug">Slug</label>
    <input type="slug" class="form-control" id="slug" placeholder="Slug" name="Slug">
    <?php str_slug('title', '-'); ?>
  </div>

   <div class="form-group">
    <label for="description">Description</label>
    <input type="textarea" class="form-control" id="description" placeholder="Description" name="description">
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="is_visible" name="is_visible">
    <label class="form-check-label" for="block">Is Visible</label>
  </div>

    
    </select>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
