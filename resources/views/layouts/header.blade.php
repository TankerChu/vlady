<!-- Phần menu -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar"
	style="font-family: Roboto;">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home-page') }}"><img
				src="{{ asset('img/icon/vlady-logo-1024x726.png') }}" alt="" width="100px" height="80px"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
			aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav" style="font-size: 20px">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="{{ route('home-page') }}" class="nav-link"><strong>Trang
							Chủ</strong></a></li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown"><strong>Giới Thiệu</strong></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="{{ route('about-vlady') }}">Về Vlady</a>
						<a class="dropdown-item" href="{{ route('about-nhunglady') }}">Về NhungLady</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="{{ route('classes') }}" class="nav-link dropdown-toggle" id="navbarDropdown"><strong>Khóa
							Học Trực Tiếp</strong></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach (App\Course::where('is_featured', 1)->get() as $featured)
						<a class="dropdown-item"
							href="{{ route('course',[$featured->slug, $featured->id]) }}">{{$featured->name}}</a>
						@endforeach
					</div>
				</li>
				<li class="nav-item"><a href="https://nhungladyacademy.edu.vn/p/danh-sach-khoa-hoc"
						class="nav-link"><strong>Khóa Học Online</strong></a></li>
				<li class="nav-item dropdown">
					<a href="http://nuhoangphongthe.com/" class="nav-link dropdown-toggle"
						id="navbarDropdown"><strong>Nữ Hoàng Phòng The</strong></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="http://nuhoangphongthe.com/category/tam_ly_phong_the/">Tâm Lí
							Phòng The</a>
						<a class="dropdown-item" href="http://nuhoangphongthe.com/category/nhap-mon-tinh-duc-hoc/">Kỹ
							Thuật Phòng The</a>
						<a class="dropdown-item" href="http://nuhoangphongthe.com/category/cuc_khoai/">Cực Khoái</a>
						<a class="dropdown-item" href="http://nuhoangphongthe.com/category/goc_tam_su/">Góc Tâm
							Sự</a>
						<a class="dropdown-item" href="http://nuhoangphongthe.com/category/tinh_duc_doc_la/">Công Cụ
							Hỗ Trợ Phòng The</a>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a href="{{ route('events') }}" class="nav-link dropdown-toggle" id="navbarDropdown"
						role="button"><strong>Sự Kiện</strong></a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="https://www.facebook.com/groups/nghethuatphongthedinhcao/">Off
							Group</a>
						<a class="dropdown-item" href="{{ route('hanoievents') }}">Event Hà Nội</a>
						<a class="dropdown-item" href="{{ route('hcmevents') }}">Event HCM</a>
					</div>
				</li>
				<li class="nav-item"><a href="{{ route('contact-us') }}" class="nav-link"><strong>Liên
							Hệ</strong></a></li>
				<ul class="ftco-social list-unstyled row float-right row align-items-center" style="margin-left: 10px">
					<li class="ftco-animate" style="padding-right: 18px"><a
							href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ"><span
								class="icon-youtube"></span></a></li>
					<li class="ftco-animate" style="padding-right: 18px"><a
							href="https://www.facebook.com/hocvienyeuVlady/"><span class="icon-facebook"></span></a>
					</li>
					<li class="ftco-animate" style="padding-right: 18px"><a
							href="https://www.instagram.com/nhung.lady/"><span class="icon-instagram"></span></a>
					</li>
				</ul>
			</ul>
		</div>
	</div>
</nav>