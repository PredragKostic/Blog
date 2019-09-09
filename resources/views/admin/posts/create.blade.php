@extends('admin.layout')

@section('content')

<form method="POST" action="{{ route('posts.store') }}">
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
    <label for="description">Description</label>
    <input type="text" class="form-control" id="description" placeholder="Description" name="description">
  </div>

  <div class="form-group">
    <label for="article">Article</label>
    <input type="texarea" class="form-control" id="article" placeholder="Article" name="article">
  </div>
     
    </select>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection