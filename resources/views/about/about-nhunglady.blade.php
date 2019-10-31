@extends('layouts/master')

@section('banner')
<section class="hero-wrap js-fullheight">
	<div class="overlay" style="background-image: url('{{ asset('img/1546591430121.png') }}' )"></div>
</section>
@endsection

@section('content')
<section class="ftco-about d-md-flex">
	<div class="one-half img"
		style="background-image: url('{{ asset('img/anh-ve-nhunglady.png') }}' );background-size: cover; background-position: top;">
		<a href="https://www.youtube.com/watch?v=LG0FHYgMtAE"
			class="icon popup-youtube d-flex justify-content-center align-items-center">

			<span class="icon-play"></span>
		</a>
	</div>
	<div class="one-half ftco-animate">
		<div class="heading-section ftco-animate ">
			<h2 class="mb-4">Về NhungLady</h2>
		</div>
		<div>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>
</section>
@endsection