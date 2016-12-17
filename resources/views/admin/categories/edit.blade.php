@extends('admin.layout')
@section('content')

 <section class="content-header">
    <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-tasks"></i> Categories</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{ Url('/admin') }}">Home</a></li>
				<li><i class="fa fa-tasks"></i><a href="{{ Url('/admin/categories') }}"> Categories</a></li> 
				<li><i class="fa fa-edit"></i> Edit</li>                          
			</ol>
		</div>
	</div>

	<section class="panel">
		<div class="panel-body">
			<form role='form' method="post">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				@foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
					<div class="form-group">
						<label for="name">{{$value['name']}} Name:</label>
						<input type="text" name="name[{{$key}}]" value="{{$category->translate($key)->name}}" required class="form-control" value="{{ old('first_name') }}">
					</div>
				@endforeach

            	<button type="submit" class="btn btn-primary">Edit Category</button>
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