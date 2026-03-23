<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>{{ config('app.name', 'Laravel') }}</title>

  <!-- color-modes:js -->
  <script src="{{ asset('assets/js/color-modes.js') }}"></script>
  <!-- endinject -->

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
	<!-- endinject -->

	<!-- Plugin css for this page -->
	<link rel="stylesheet" href="{{ asset('assets/vendors/flatpickr/flatpickr.min.css') }}">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
	<!-- endinject -->

  <!-- Layout styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo2/style.css') }}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:partials/_navbar.html -->
		<div class="horizontal-menu">

            <livewire:layout.navigation />
			<nav class="bottom-navbar">
				<div class="container">
					<ul class="nav page-navigation">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('dashboard') }}" wire:navigate>
								<i class="link-icon" data-feather="box"></i>
								<span class="menu-title">Dashboard</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="link-icon" data-feather="mail"></i>
								<span class="menu-title">Company</span>
								<i class="link-arrow"></i>
							</a>
							<div class="submenu">
								<ul class="submenu-item">
									<li class="category-heading">Email</li>
									<li class="nav-item"><a class="nav-link" href="{{ route('company.index') }}" wire:navigate>List</a></li>
									<li class="nav-item"><a class="nav-link" href="{{ route('company.create') }}" wire:navigate>Create</a></li>
								</ul>
							</div>
						</li>

					</ul>
				</div>
			</nav>

		</div>
		<!-- partial -->

		<div class="page-wrapper">

			<div class="page-content">



        {{ $slot }}


			</div>

			<!-- partial:partials/_footer.html -->
			<footer class="footer border-top">
        <div class="container d-flex flex-row align-items-center justify-content-between py-3 small">
          <p class="text-secondary mb-1 mb-md-0">Copyright © 2024 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
          <p class="text-secondary">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
        </div>
			</footer>
			<!-- partial -->

		</div>
	</div>

	<!-- core:js -->
	<script src="{{asset('assets/vendors/core/core.js')}}"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="{{ asset('assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
	<!-- End custom js for this page -->

</body>
</html>
