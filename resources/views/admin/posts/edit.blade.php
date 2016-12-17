@extends('admin.layout')
@section('content')

 <section class="content-header">
    <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-tags"></i> Posts</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{ Url('/admin') }}"> Home</a></li>
				<li><i class="fa fa-tags"></i><a href="{{ Url('/admin/categories') }}"> Posts</a></li> 
				<li><i class="fa fa-plus"></i> Add</li>                          
			</ol>
		</div>
	</div>

	<section class="panel">
		<div class="panel-body">
			<form role='form' method="post" enctype="multipart/form-data">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
				@foreach(LaravelLocalization::getSupportedLocales() as $key => $value)
					<div class="form-group">
						<label for="title">{{$value['name']}} Title:</label>
						<input type="text" name="title[{{$key}}]" required class="form-control" value="{{ $post->translate($key)->title }}">
					</div>
					<div class="form-group">
						<label for="description">{{$value['name']}} Description:</label>
						<input type="text" name="description[{{$key}}]" required class="form-control" value='{{ $post->translate($key)->description }}'>
					</div>
					<hr>

				@endforeach
				<img src="{{ asset('img/uploades/'.$post->image) }}" width="100">
				<div class="form-group">
					<label for="image">Image:</label>
					<input type="file" id="image" name="image" class="form-control">
				</div>

				<div class="form-group">
					<label for="image">Category:</label>
					<select name="category" class="form-control">
						@foreach($categories as $cat)
							<option value="{{$cat->id}}" {{$cat->id == $post->cat_id ? 'selected' : ''}}>{{$cat->translate('en')->name}}</option>
						@endforeach
					</select>
				</div>
            	<button type="submit" class="btn btn-primary">Edit Post</button>
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