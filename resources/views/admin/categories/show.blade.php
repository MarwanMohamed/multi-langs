@extends('admin.layout')
@section('content')

 <section class="content-header">
    <div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-tasks"></i> Categories</h3>
			<ol class="breadcrumb">
				<li><i class="fa fa-home"></i><a href="{{ Url('/admin') }}">Home</a></li>
				<li><i class="fa fa-tasks"></i>Categories</li>                          
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
					<th>English Name</th>
					<th>Arabic Name</th>
					<th>Slug</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@php $id = 1 @endphp
				@foreach($cats as $cat)
				<tr>
					<td>{{$id++}}</td>
					<td>{{$cat->translate('en')->name}}</td>
					<td>{{$cat->translate('ar')->name}}</td>
					<td>{{$cat->slug}}</td>
					<td>
						<a href="categories/{{$cat->id}}/edit" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a>
						<form style="display: inline-block;" method="post" action="{{ route('category.delete', [$cat->id]) }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<button onclick="return confirm('Are you sure ?');" href="users//delete" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
	{{ $cats->links() }}	
	<br>
</section>

@stop