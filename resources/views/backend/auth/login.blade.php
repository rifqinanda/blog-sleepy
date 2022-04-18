@extends('layout')

<title>Blog | Login</title>
	<div class="justify-content-center d-flex align-items-center h-100">
		<div class="card login-form">
			<div class="card-header">
				<h1 class="text-center">Sleepy</h1>
			</div>
			<div class="card-body">
				<div class="text-center">
					<h3 class="h3 fw-bold">Login</h3>
				</div>
				@if($errors->all())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->any() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<div class="">
					<form enctype="multipart/form-data" action="/admin/savelogin" method="post">
						@csrf
						<div class="form-group my-3">
							<input type="email" name="email" class="form-control" placeholder="Email Address">
						</div>
						<div class="form-group my-3">
							<input type="password" name="password" class="form-control" placeholder="Password">
						</div>
						<div class="text-center">
							<button type="submit" class="btn-color1 btn-shape">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>