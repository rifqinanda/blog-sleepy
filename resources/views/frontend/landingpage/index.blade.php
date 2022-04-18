@extends('layout')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Landingpage</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
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
					<li class="nav-item"><a href="#" class="nav-link h4 text-dark fw-bold">About</a></li>
					<li class="nav-item"><a href="#" class="nav-link h4 text-dark fw-bold">Blog</a></li>
					<li class="nav-item"><a href="#" class="nav-link h4 text-dark fw-bold">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<section class="container">
	<div class="py-5">
		<div class="row flex-column-reverse flex-md-row">
			<div class="col-12 col-md-5 py-2 my-auto" data-aos="fade-right">
				<h1 class="h1 fw-bold">Vacation with Sleepy</h1>
				<p class="text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="d-md-none d-block d-lg-block my-3">
					<button class="btn-color1 btn-shape">Getting Start</button>
				</div>
			</div>
			<div class="col-12 col-md-7" data-aos="fade-left">
				<img src="/assets/img/img_hero_section.png" class="img-fluid">
			</div>
		</div>
		<div class="d-md-block d-none d-lg-none my-3 text-center">
			<button class="btn-color1 btn-shape">Getting Start</button>
		</div>
	</div>
</section>
<section class="py-5">
	<div class="container">
		<div class="text-center py-3" data-aos="fade-up">
			<h1 class="h1 fw-bold my-3">Vacation with Sleepy</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
		</div>
		<div class="row py-3" data-aos="fade-down">
			<div class="col-12 col-md-4 py-2">
				<h3 class="h3 fw-bold text-color1">Fast</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="text-center bg-color3 bg-1 bg-2 py-3 px-3" data-aos="flip-left">
					<img src="/assets/img/img_fast.png" class="img-fluid">
				</div>
			</div>
			<div class="col-12 col-md-4 py-2">
				<h3 class="h3 fw-bold text-color1">Accurate</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="text-center bg-color3 bg-1 bg-2 py-3 px-3" data-aos="flip-left">
					<img src="/assets/img/img_accurate.png" class="img-fluid">
				</div>
			</div>
			<div class="col-12 col-md-4 py-2">
				<h3 class="h3 fw-bold text-color1">Trusted</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="text-center bg-color3 bg-1 bg-2 py-3 px-3" data-aos="flip-left">
					<img src="/assets/img/img_trusted.png" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-color2" data-aos="fade-up">
	<div class="py-5">
		<div class="container">
			<div class="row flex-md-column-reverse flex-lg-row">
				<div class="col-12 col-lg-6" data-aos="fade-up-right">
					<img src="/assets/img/img_banner_start_first_order_01.png" class="img-fluid" data-aos="flip-left">
					<div class="row py-3">
						<div class="col-4" data-aos="flip-left">
							<img src="/assets/img/img_banner_start_first_order_02.png" class="img-fluid">
						</div>
						<div class="col-4" data-aos="flip-left">
							<img src="/assets/img/img_banner_start_first_order_03.png" class="img-fluid">
						</div>
						<div class="col-4" data-aos="flip-left">
							<img src="/assets/img/img_banner_start_first_order_04.png" class="img-fluid">
						</div>
					</div>
					<div class="text-center py-2 d-md-block d-none d-lg-none">
						<button class="btn-color2 btn-shape">Get Started</button>
					</div>
				</div>
				<div class="col-12 col-lg-6" data-aos="fade-up-left">
					<div class="text-md-center text-start text-lg-start">
						<h1 class="h1 fw-bold text-light">Start Your First Order With Sleepy</h1>
						<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
						<div class="py-2 d-md-none d-block d-lg-block">
							<button class="btn-color2 btn-shape">Get Started</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5" data-aos="fade-up">
	<div class="container">
		<div class="text-center">
			<h1 class="h1 fw-bold">Hot Destination</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
		<div class="row py-3">
			<div class="col-12 col-md-6 col-lg-3">
				<img src="/assets/img/img_hot_destination_01.png" class="img-fluid w-100" data-aos="flip-left">
				<h3 class="h3 fw-bold pt-2">Verstibucu Arcu</h3>
				<div>
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star.png" class="img-fluid">
				</div>
				<div class="py-3">
					<button class="btn-color3 btn-shape">Bali</button>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<img src="/assets/img/img_hot_destination_02.png" class="img-fluid w-100" data-aos="flip-left">
				<h3 class="h3 fw-bold pt-2">Verstibucu Arcu</h3>
				<div>
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star.png" class="img-fluid">
				</div>
				<div class="py-3">
					<button class="btn-color3 btn-shape">Lombok</button>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<img src="/assets/img/img_hot_destination_03.png" class="img-fluid w-100" data-aos="flip-left"> 
				<h3 class="h3 fw-bold pt-2">Verstibucu Arcu</h3>
				<div>
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star.png" class="img-fluid">
				</div>
				<div class="py-3">
					<button class="btn-color3 btn-shape">Semarang</button>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-3">
				<img src="/assets/img/img_hot_destination_04.png" class="img-fluid w-100" data-aos="flip-left">
				<h3 class="h3 fw-bold pt-2">Verstibucu Arcu</h3>
				<div>
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star_filled.png" class="img-fluid">
					<img src="/assets/img/img_star.png" class="img-fluid">
				</div>
				<div class="py-3">
					<button class="btn-color3 btn-shape">Medan</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="bg-color1" data-aos="fade-up">
	<div class="py-5">
		<div class="container">
			<div class="row flex-column flex-lg-row">
				<div class="col-12 col-lg-6" data-aos="fade-up-right">
					<div class="text-center text-lg-start">
						<h1 class="h1 fw-bold">Get In Touch</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
				</div>
				<div class="col-12 col-lg-6" data-aos="fade-up-left">
					<div class="row text-center text-lg-start">
						<div class="col-4">
							<img src="/assets/img/img_fb.png" class="img-fluid">
						</div>
						<div class="col-4">
							<img src="/assets/img/img_twitter.png" class="img-fluid">
						</div>
						<div class="col-4">
							<img src="/assets/img/img_wa.png" class="img-fluid">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="bg-color2">
	<div class="py-5">
		<div class="container">
			<div class="row flex-column flex-lg-row">
				<div class="col-12 col-lg-6 text-center text-lg-start my-auto">
					<img src="/assets/img/logo_sleepy_white.png" class="img-fluid">
				</div>
				<div class="col-12 col-lg-6 text-center text-lg-start d-lg-flex my-auto">
					<div class="">
						<img src="/assets/img/img_location.png" class="img-fluid">
						<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
					<div class="">
						<img src="/assets/img/img_phone.png" class="img-fluid">
						<p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>