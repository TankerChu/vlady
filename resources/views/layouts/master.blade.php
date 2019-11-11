<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Vlady - Nâng Tầm Hạnh Phúc</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="icon" href="{{asset('images/icon/vlady-logo-1024x726.png')}}">
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{asset('css/animate.css') }}">

		<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{asset('css/flickity.min.css') }}">
		<link rel="stylesheet" href="{{asset('css/magnific-popup.css') }}">

		<link rel="stylesheet" href="{{asset('css/aos.css') }}">

		<link rel="stylesheet" href="{{asset('css/ionicons.min.css') }}">

		<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css') }}">
		<link rel="stylesheet" href="{{asset('css/jquery.timepicker.css') }}">


		<link rel="stylesheet" href="{{asset('css/flaticon.css') }}">
		<link rel="stylesheet" href="{{asset('css/icomoon.css') }}">
		<link rel="stylesheet" href="{{asset('css/style.css') }}">
		@yield('css')
	</head>

	<body>

		@include('layouts/header')

		@yield('banner')

		@yield('content')

		@yield('form')

		@include('layouts/footer')

		<a class="lgscreenphone phonelink" href="{{route('contact-us')}}"><img class="phoneicon"
				src="{{asset ('images/icon/pngkey.com-phone-icon-png-137208.png') }}"></a>
		<a class="mbscreenphone phonelink" href="tel:0946169779"><img class="phoneicon"
				src="{{asset ('images/icon/pngkey.com-phone-icon-png-137208.png') }}"></a>
		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
					stroke="#F96D00" /></svg></div>


		<script src="{{ asset('js/jquery.min.js')}}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{ asset('js/popper.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
		<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
		<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
		<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('js/aos.js')}}"></script>
		<script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{ asset('js/bootstrap-datepicker.js')}}"></script>
		<script src="{{ asset('js/jquery.timepicker.min.js')}}"></script>
		<script src="{{ asset('js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
		</script>
		<script src="{{ asset('js/flickity.pkgd.min.js')}}"></script>
		<script src="https://unpkg.com/flickity-bg-lazyload@1/bg-lazyload.js"></script>
		<script src="{{ asset('js/main-front.js') }}"></script>
		@yield('js')
	</body>

</html>