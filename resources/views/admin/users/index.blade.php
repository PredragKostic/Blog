@extends('admin.layout')

@section('content')

<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tables</li>
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Created</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@foreach($users as $user)
                  <tr>
                    <td>{{ $user->id }}</td>
                    <td><a href="{{ url('admin/users/' . $user->id . '/edit') }}">{{ $user->name }}</a></td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->admin }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                    	<form onclick="return confirm('Are you sure you want to delete this item?');" method="POST" action="{{ route('users.destroy' , $user->id) }}">
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