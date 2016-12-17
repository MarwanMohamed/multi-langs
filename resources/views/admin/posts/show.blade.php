@extends('admin.layout')
@section('content')

 <section class="content-header">
    <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-tags"></i> Posts</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{ Url('/admin') }}">Home</a></li>
				<li><i class="fa fa-tags"></i>Posts</li>                          
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
					<th>English Title</th>
					<th>English Description</th>
					<th>Arabic Title</th>
					<th>Arabic Description</th>
					<th>image</th>
					<th>Category</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $id = 1 @endphp
				@foreach($posts as $post)
				<tr>
					<td>{{$id++}}</td>
					<td>{{$post->translate('en')->title}}</td>
					<td>{{$post->translate('en')->description}}</td>
					<td>{{$post->translate('ar')->title}}</td>
					<td>{{$post->translate('ar')->description}}</td>
					<td><img src="{{ asset('img/uploades/'.$post->image) }}" width="100"></td>
					<td>{{$post->category->translate('en')->name}}</td>
					<td>
						<a href="posts/{{$post->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
						<form style="display: inline-block;" method="post" action="{{ route('post.delete', [$post->id]) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button onclick="return confirm('Are you sure ?');" href="users//delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
	{{ $posts->links() }}	
	<br>
</section>

@stop