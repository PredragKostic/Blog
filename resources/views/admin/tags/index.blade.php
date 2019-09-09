@extends('admin.layout')

@section('content')

<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{ url('admin/home') }}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tags</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  	 <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Is Visible</th>
                    <th>Created</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($tags as $tag)
                  <tr>
                    <td>{{ $tag->id }}</td>
                    <td><a href="{{ url('admin/tags/' . $tag->id . '/edit') }}">{{ $tag->title }}</a></td>
                    <td>{{ $tag->slug }}</td>
                    <td>{{ $tag->is_visible }}</td>
                    <td>{{ $tag->created_at }}</td>
                    <td>
                    	<form onclick="return confirm('Are you sure you want to delete this item?');" method="POST" action="{{ route('tags.destroy' , $tag->id) }}">
                    		@csrf
                    		@method('DELETE')
                    		<button type="submit"><i class="fa fa-times" aria-hidden="true"></i></button>
                    	</form>
                    </td>
                    
                  </tr>
                  @endforeach
                </tbody>
                </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

        <p class="small text-center text-muted my-5">
          <em>More table examples coming soon...</em>
        </p>

@endsection