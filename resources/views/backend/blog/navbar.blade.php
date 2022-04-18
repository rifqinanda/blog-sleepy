<header>
	<nav class="navbar navbar-light navbar-expand-lg shadow p-3">
		<div class="container">
			<div class="navbar-brand">
				<a href="/"><img src="/assets/img/logo_sleepy.png" class="img-fluid"></a>
			</div>
			<button class="navbar-toggler ms-auto" data-bs-target="#navbarNav" data-bs-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto text-center py-2">
					<li class="nav-item"><a href="/admin/dashboard" class="nav-link h4 text-dark fw-bold">Dashboard</a></li>
					<li class="nav-item"><a href="/admin/blog" class="nav-link h4 text-dark fw-bold">Blog</a></li>
					<form action="/admin/logout" method="post" enctype="multipart/form-data" class="mx-2">
						@csrf
						<button class="btn-color4 btn-shape">Logout</button>
					</form>
				</ul>
			</div>
		</div>
	</nav>
</header>