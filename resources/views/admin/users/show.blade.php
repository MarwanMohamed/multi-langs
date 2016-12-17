@extends('admin.layout')
@section('content')

 <section class="content-header">
    <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-users"></i> users</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{ Url('/admin') }}">Home</a></li>
				<li><i class="fa fa-users"></i>Users</li>                          
			</ol>
		</div>
	</div>

	@if(Session::has('message'))
		<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif
	<section class="panel">
		<table class="table">
			<thead>
				<tr>
					<th>id</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Permission</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $id = 1 @endphp

				@foreach($users as $user)
				<tr>
					<td>{{ $id++ }}</td>
					<td>{{ $user->first_name }}</td>
					<td>{{ $user->last_name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->isAdmin == 1 ? 'Admin' : 'User'  }}</td>
					<td>
						<a href="users/{{$user->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
						<form style="display: inline-block;" method="post" action="{{ route('user.delete', [$user->id]) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button onclick="return confirm('Are you sure ?');" href="users/{{$user->id}}/delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
						</form>
					</td>
				</tr>
				@endforeach()
			</tbody>
		</table>
	</section>
	{{ $users->links() }}	
	<br>
</section>

@stop