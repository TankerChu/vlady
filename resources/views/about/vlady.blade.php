@extends('layouts.master')

@section('banner')
<!-- {{-- banner --}} -->
<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url('images/1546591477050.png' )"></div>
</section>
<!-- {{-- hết banner --}} -->
@endsection

@section('content')
<!-- {{-- copplapse menu --}} -->
<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url();"
    data-stellar-background-ratio="1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Về Vlady</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Tầm nhìn sứ mệnh</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Báo chí truyền hình</a>
                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                            aria-controls="nav-about" aria-selected="false">Cơ sở vật chất</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- {{-- hết collapse menu --}} -->

<!-- {{-- phần giới thiệu --}} -->
<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url('images/1541528243053.jpg' );">
        <a href="https://www.youtube.com/watch?v=LG0FHYgMtAE"
            class="icon popup-youtube d-flex justify-content-center align-items-center">

            <span class="icon-play"></span>
        </a>
    </div>
    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">Học viện yêu Vlady</h2>
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
<!-- {{-- hết giới thiệu --}} -->

<!-- {{-- phần khách hàng --}} -->
<section class="ftco-section testimony-section"
    style="background-image: url('images/8-su-that-kinh-ngac-ve-sex-khong-phai-ai-cung-biet.png '); font-family: Roboto,serif;"
    data-stellar-background-ratio="1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Phản Hồi
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Khách hàng nói gì về chúng tôi?</h2>
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8 ftco-animate">
                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel ftco-owl">
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png ')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">“Với 9 năm hôn nhân mà mình chưa bao giờ biết cảm giác thăng hoa
                                            là gì. Mình có tâm sự với bạn về việc này khi trong đầu có ý muốn li hôn.
                                            May sao có cuộc tâm sự ấy mà mình biết đến Group Nghệ thuật phòng the đỉnh
                                            cao - Nhunglady, mình thử tự thay đổi bản thân, liều đăng kí một khóa học cơ
                                            bản. Vậy mà kết quả thật bất ngờ, hiện tại vợ chồng mình hạnh phúc hơn cả
                                            hồi mới yêu.</p>
                                        <p class="name">Trần Thị Thanh Hương</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png ')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">Hôm nay thực hành BJ 15 phút, vua khỉ, cưỡi ngựa 3 phút = cùng
                                            nhau lên đỉnh. Cô giáo dạy dễ hiểu và học nhanh lắm. Cảm ơn em. Lúc chị khó
                                            khăn nhất đã chia sẻ mọi thứ với chị. Giúp chị nhận ra giá trị của bản thân.
                                            Thật sự rất đáng quý</p>
                                        <p class="name">Chị H (Hà Nội)</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png ')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">Chị T “Cảm ơn Nhung. Cái vụ mùi thơm điểm B áp dụng rồi. Tuyệt
                                            vời! Mình mà ngại, chả bao giờ dám đăng kí học. Vào học rồi mới thấy quá
                                            sáng suốt. Mình quá tiếc là trước đây khi còn là vợ chồng son chưa có con
                                            sao không biết mà học”.</p>
                                        <p class="name">Chị H.T (Hải Phòng)</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap py-4 pb-5">
                                    <div class="user-img mb-4"
                                        style="background-image: url('images/icon/vlady-logo-1024x726.png ')">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-4">Từ ngày vào Group nghệ thuật của chị em học hỏi được biết bao
                                            nhiêu kinh nghiệm. Được chồng khen và được chiều nhiều lắm.
                                            Thank chị nhiều vì cuộc sống của em thăng hoa và hạnh phúc hơn lắm</p>
                                        <p class="name">Nguyễn Kim Ngân (Hà Nội)</p>
                                        <span class="position">Khách Hàng</span>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="item">
												<div class="testimony-wrap py-4 pb-5">
													<div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
														<span class="quote d-flex align-items-center justify-content-center">
															<i class="icon-quote-left"></i>
														</span>
													</div>
													<div class="text text-center">
														<p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
														<p class="name">Roger Scott</p>
														<span class="position">Khách Hàng</span>
													</div>
												</div>
											</div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{-- hết phần khách hàng --}} -->
@endsection