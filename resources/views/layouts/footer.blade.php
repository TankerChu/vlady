<a class="lgscreenphone phonelink" href="https://www.youtube.com/channel/UCQQ9KdZl80R78hZjb8Q_3NQ"><img
		class="phoneicon" src="{{ asset('img/icon/pngkey.com-phone-icon-png-137208.png') }}"></a>
<a class="mbscreenphone phonelink" href="tel:0946169779"><img class="phoneicon"
		src="{{ asset('img/icon/pngkey.com-phone-icon-png-137208.png') }}"></a>
<!--phần footer-->
<footer class="ftco-footer ftco-section img" style="font-family: Roboto;">
	<section class="ftco-appointment" style="font-family: Roboto;">
		<div class="overlay"></div>
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-2 col-md-6 mb-5 mb-md-5">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2"></h2>
						<img src="{{ asset('img/icon/vlady-logo-1024x726.png') }}"
							style="height: 130px; width: 190px; line-height:5px">
						<p>Nâng Tầm Hạnh Phúc</p>
						<div class="block-23 mb-3">
							<ul>
								<li><a href="#"><span class="icon icon-map-marker"></span><span class="text">44/429,
											Thụy Khuê, Tây Hồ, Hà Nội.</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">094 616
											9779</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span
											class="text">hotro@vlady.vn</span></a></li>
							</ul>
						</div>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a
									href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ"><span
										class="icon-youtube"></span></a></li>
							<li class="ftco-animate"><a href="https://www.facebook.com/hocvienyeuVlady/"><span
										class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="https://www.instagram.com/nhung.lady/"><span
										class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-5 appointment ftco-animate align-items-center">
					<div class="heading-section ftco-animate">
						<h3 class="mb-3">Liên hệ với chúng tôi</h3>
						<p></p>
					</div>
					<form action="{{ route('contact-us') }}" method="post" class="appointment-form">
						<div class="d-md-flex">
							<div class="form-group">
								<label for="name"></label>
								<input type="text" name="name" class="form-control" value="{{old ('name') }}"
									placeholder="Tên Đầy Đủ Của Bạn">
								@if ($errors->has('name'))
								<small class="invalid-feedback">{{ $errors -> first('name') }}</small>
								@endif
							</div>
							<div class="form-group ml-md-4">
								<label for="phone"></label>
								<input type="text" name="phone" class="form-control" value="{{old ('phone') }}"
									placeholder="Số Điện Thoại">
								@if ($errors->has('phone'))
								<small class="invalid-feedback">{{ $errors -> first('phone') }}</small>
								@endif
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<label for="email"></label>
								<input type="text" name="email" class="form-control" value="{{old ('email') }}"
									placeholder="Email Của Bạn">
								@if ($errors->has('email'))
								<small class="invalid-feedback">{{ $errors -> first('email') }}</small>
								@endif
							</div>
						</div>
						<div class="form-group ml-md-4">
							<button type="submit" class="btn btn-primary py-3 px-5">Gửi Đi</button>
						</div>
						@csrf

					</form>

					<div class="container-fluid" style="padding-left: 0; padding-right: 0">
						<div class="map-responsive"><iframe
								src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14894.639934783221!2d105.8123466!3d21.0462867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x735e5efc027707cc!2zSOG7jWMgdmnhu4duIHnDqnUgVmxhZHk!5e0!3m2!1svi!2s!4v1569759338036!5m2!1svi!2s"
								width="450" height="200" frameborder="0" style="border:0;"
								allowfullscreen="true"></iframe></div>
					</div>

				</div>

				<div class="col-lg-5 appointment ftco-animate">
					<iframe
						src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FhocvienyeuVlady%2F&tabs=message&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
						width="500" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
						allowTransparency="true" allow="encrypted-media"></iframe>

					<a class="embedly-card" data-card-key="c8194667b00a4e179fa86b640f018523" data-card-controls="0"
						data-card-theme="dark" data-card-branding="0" data-card-type="article-full"
						data-card-align="left"
						href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ/featured">Nhunglady - Phù Thuỷ
						Phòng The</a>
					<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>


				</div>
			</div>

		</div>

		</div>
	</section>
</footer>
<!--hết footer-->