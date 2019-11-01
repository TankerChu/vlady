<footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
    <div class="container">
        <div class="row mb-5">
            {{-- phần logo và liên hệ --}}
            <div class=" col-lg-3 col-md-6 mb-5 mb-md-5">
                <img src="{{ asset('images/icon/vlady-logo-1024x726.png') }}" style="height: 120px; width:
            180px;margin-left: auto;
            margin-right: auto;">
                <p>Nâng Tầm Hạnh Phúc</p>
                <div class="ftco-footer-widget mb-4" style="padding-top:1%">
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">44/429,
                                    Thụy Khuê, Tây Hồ, Hà Nội</span></li>
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

            {{-- phần form và map --}}
            <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                <div class="ftco-footer-widget mb-4">
                    <h1>Liên Hệ Với Chúng Tôi</h1>
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
                        <div class="d-md-flex"></div>
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
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-4">Gửi Đi</button>
                        </div>
                        @csrf
                    </form>
                    <div class="block-21 mb-4 d-flex">
                        <div class="container-fluid" style="padding-left: 0; padding-right: 0">
                            <div class="map-responsive">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14894.639934783221!2d105.8123466!3d21.0462867!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x735e5efc027707cc!2zSOG7jWMgdmnhu4duIHnDqnUgVmxhZHk!5e0!3m2!1svi!2s!4v1569759338036!5m2!1svi!2s"
                                    width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="true">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- phần facebook page và youtube channel --}}
            <div class="col-lg-5 col-md-6 mb-5 mb-md-5">
                <div class=" ftco-footer-widget mb-4 ml-md-4">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FhocvienyeuVlady%2F&tabs=message&width=340&height=180&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="100%" height="100%" style="border:none;overflow:hidden" scrolling="yes" frameborder="0"
                        allowTransparency="true" allow="encrypted-media">
                    </iframe>
                    <a class="embedly-card" data-card-key="c8194667b00a4e179fa86b640f018523" data-card-controls="0"
                        data-card-theme="dark" data-card-branding="0" data-card-type="article-full"
                        data-card-align="left"
                        href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ/featured">Nhunglady - Phù Thuỷ
                        Phòng The</a>
                    <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart"
                        aria-hidden="true"></i>
                    by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>
    </div>
</footer>