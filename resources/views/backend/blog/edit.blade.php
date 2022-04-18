@extends('layout')
<title>Edit Blog</title>
@include('backend.blog.navbar')
<div class="container">
	<div class="py-5">
		<div class="card">
			<div class="card-header">
				<h2 class="fw-bold">Edit Blog</h2>	
			</div>
			@if($errors->any())
			<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
				</ul>
			</div>
			@endif
			<div class="card-body">
				<form action="/admin/blog/{{ $blog->id }}" method="post" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="title" class="form-control" value="{{ $blog->title }}">
					</div>
					<div class="form-group">
						<label>Image</label>
						<input type="hidden" name="image_old" value="{{ $blog->image }}">
						<input type="file" name="image" class="form-control">
					</div>
					<div class="form-group">
						<label>Category</label>
						<select class="form-control" name="id_category">
							<option value="{{ $blog->id_category }}">{{ $blog->category->name }}</option>
							<option disabled>Select Category</option>
							@foreach($category as $ctr)
							<option value="{{ $ctr->id }}">{{ $ctr->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Description</label>
						<textarea class="form-control" rows="10px" cols="10px" name="desc">{{ $blog->desc }}</textarea>
					</div>
					<div class="my-3">
						<button class="btn-color1 btn-shape">Save</button>
						<a href="/admin/blog" class="btn-shape">Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>