@extends('admin.layout')

@section('content')

<form method="POST" enctype="multipart/form-data" action="{{ route('users.update', $user->id) }}">
	@csrf
  @method('PUT')
	<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $user->name }}">
  </div>

  <div class="form-group">
  	<label for="exmail">Email address</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $user->email }}">
    </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
  </div>

  <div class="form-group">
    <label for="password_confirmation">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation">
  </div>

  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" id="image" placeholder="Image" name="image">
  </div>

  <div class="form-group">
    <label for="admin">Admin</label>
    <select class="form-control" id="admin" name="admin">
      <option value="0" @if($user->admin == 0) selected="selected" @endif>Member</option>
      <option value="1" @if($user->admin == 1) selected="selected" @endif>Admin</option>
     
    </select>
  </div>

  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="block" name="block" @if($user->block) checked="checked" @endif>
    <label class="form-check-label" for="block">Block</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection