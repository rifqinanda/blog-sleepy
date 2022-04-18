@extends('layout')

@include('backend.blog.navbar')
<title>
	Blog
</title>
<div class="container">
	<div class="py-5">
		<div>
			<h2 class="h2 fw-bold">Blog List</h2>
		</div>
		<div class="row">
			<div class="col-4">
				<a href="/admin/blog/create" class="btn-color1 btn-shape">Create</a>
			</div>
			<div class="col-8">
				<form action="/admin/blog" class="d-flex" name="search">
					<input type="text" name="search" class="form-control" placeholder="Search here . . .">
					<button class="btn-color1 btn-shape">Search</button>
				</form>
			</div>
		</div>
		<div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th style="width: 10px;">No.</th>
						<th style="width: 400px;">Image</th>
						<th>Title</th>
						<th style="width: 200px;">Category</th>
						<th>Desc</th>
						<th style="width: 150px;">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($blog as $blg)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td><img width="400px" src="/storage/{{ $blg->image }}"></td>
						<td>{{ $blg->title }}</td>
						<td>{{ $blg->category->name }}</td>
						<td>{{ Str::limit($blg->desc, 20) }}</td>
						<td>
							<a href="/admin/blog/{{ $blg->id }}/edit" class="btn-color1 btn-shape">Edit</a>
							<form action="/admin/blog/{{ $blg->id }}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn-color4 btn-shape">Delete</button>
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>