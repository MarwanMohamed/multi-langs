@extends('admin.layout')
@section('content')

 <section class="content-header">
    <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-users"></i> users</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{ Url('/admin') }}">Home</a></li>
				<li><i class="fa fa-users"></i><a href="{{ Url('/admin/users') }}"> Users</a></li> 
				<li><i class="fa fa-plus"></i>Add</li>                          
			</ol>
		</div>
	</div>

	<section class="panel">
		<div class="panel-body">
			<form role='form' method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				<div class="form-group">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name" id='first_name' required class="form-control" value="{{ old('first_name') }}">
				</div>

				<div class="form-group">
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name" id='last_name' required class="form-control" value="{{ old('last_name') }}">
				</div>

				<div class="form-group">
					<label for="name">E-Mail Address:</label>
					<input type="email" name="email" id='email' required class="form-control" value="{{old('email')}}">
				</div>

				<div class="form-group">
					<label for="password">Password:</label>
                    <input id="password" type="password" required class="form-control" name="password">
				</div>
				<div class="form-group">
					<label for="password-confirm">Confirm Password:</label>
                    <input id="password-confirm" type="password"  required class="form-control" name="password_confirmation">
				</div>

            	<button type="submit" class="btn btn-primary">Add User</button>
			</form>
		</div>

		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
	</section>
</section>
    
@stop