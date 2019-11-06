@extends('layouts.master')

@section('banner')
<section class="hero-wrap js-fullheight">
    <div class="overlay">
        <div class="fs-carousel"
            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": false, "contain": true, "bgLazyLoad": true }'>
            <div class="carousel-cell">
                <div class="video-texture" style="background-image:url( {{ asset('images/texture.png') }} ); ">
                </div>
                <video autoplay loop>
                    <source src=" images/Sexy-Dancer-Slowly-Touching-2.webmsd.webm" type="video/webm">
                    <source src="images/Sexy-Dancer-Slowly-Touching-2.mp4.mp4" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video
                </video>
                <div class="chat_vol2_center carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" align="center">
                                <h2 class="title">VLADY</h2>
                                <h3>Nâng Tầm Hạnh Phúc</h3>
                                <a class="view" href="#why">Bắt Đầu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/1546591430121.png">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Về Vlady</h2>
                                <p>.....</p>
                                <a class="view" href="{{route('about-vlady')}}">Chi Tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/1546591445513.png">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Các khóa học kỹ năng độc quyền</h2>
                                <p>.....</p>
                                <a class="view" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/phu-nu-a-dung-xem-dan-ong-la-tat-ca.png">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Khóa Coaching 1:1</h2>
                                <p>Cùng với chuyên gia về tâm lý - kỹ thuật tình dục học</p>
                                <a class="view" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-cell" data-flickity-bg-lazyload="images/phu-nu-a-dung-xem-dan-ong-la-tat-ca.png">
                <div class="chat_vol2 carousel-fade">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title">Coaching Trị Liêu Khoái Cảm</h2>
                                <p>Trị liệu cực khoái</p>
                                <a class="view" href="#">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('content')
<!-- phần thông tin về công ti -->
<section class="ftco-section" id="why" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Giới Thiệu
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Tại sao cần học kỹ năng phòng the ngay hôm nay?</h2>
                <p>Không thể phủ nhận tình dục ngày càng chiếm vị trí quan trọng trong đời sống hôn nhân, là tác nhân
                    không thể thiếu giúp giữ lửa hôn nhân hạnh phúc viên mãn. Những xích mích xảy ra sau hôn nhân phần
                    nhiều xuất phát từ lý do chuyện chăn gối gặp trục trặc.
                    Chuyện phòng the là một việc rất đặc biệt. Tình dục như một mốc đánh dấu quan trọng đánh dấu quan hệ
                    của hai người đã bước sang một cột mốc mà không mối quan hệ nào đạt đến được. Để giữ lửa tình yêu
                    sau hôn nhân mỗi cặp vợ chồng cần phải biết cách duy trì điều thú vị trong đời sống tình dục cũng
                    như trong cuộc sống cá nhân giữa họ và người bạn đời.

                    Xã hội ngày càng hiện đại thì mỗi chúng ta cũng cần phải thay đổi bản thân để phù hợp với cuộc sống.
                    Người phụ nữ hiện đại nhất định phải học kỹ năng phòng the, trước hết là để bản thân tự tin hơn,
                    quyến rũ hơn đồng thời sẽ "hút hồn" được người bạn đời khiến anh ấy chỉ muốn "dính" lấy bạn như keo,
                    không bị lay động trước bất kỳ một “bóng hồng” nào khác.

                    Người phụ nữ hiện đại nên gạt bỏ những quan niệm cũ, chủ động và cởi mở hơn trong chuyện chăn gối để
                    có đời sống tình dục thực sự thăng hoa.

                    Nếu bạn sở hữu được những kỹ năng phòng the đỉnh cao thì đảm bảo đời sống tình dục của vợ chồng bạn
                    sẽ viên mãn đến bất tận. Bạn biết rồi đấy, tình dục chiếm 70% trong việc giữ lửa hạnh phúc hôn nhân.
                    Nếu bạn trở thành một cao thủ chốn phòng the thì cuộc sống hôn nhân của bạn cũng chẳng khác gì Bà
                    Hoàng luôn được chàng cung phụng.
                </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Về Chúng Tôi</h4>
                    <p>
                        Học viện yêu Vlady là trung tâm đầu tiên và duy nhất trực thuộc UNESCO Việt Nam hoạt động trong
                        lĩnh vực phụ nữ và tình dục học. Với hơn 30.000 học viên trong và ngoài nước trong suốt 6 năm
                        hoạt động, chúng tôi tự hào là đơn vị tiên phong trong tư vấn, giảng dạy về lĩnh vực Tâm lý - Kỹ
                        thuật tình dục học tại Việt Nam. Chúng tôi luôn luôn đồng hành và hỗ trợ các học viên qua tư vấn
                        trực tiếp và chia sẻ các kỹ năng, kinh nghiệm trên Group Facebook "NGHỆ THUẬT PHÒNG THE ĐỈNH CAO
                        - NHUNGLADY".
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4>Video Về Chúng Tôi</h4>
                    <div class='embed-container'><iframe width="100%" height="315"
                            src="https://www.youtube.com/embed/LG0FHYgMtAE" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- phần lí do lựa chọn --}}
<section class="ftco-section" style="font-family: Roboto; background: ;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Lựa chọn chúng tôi
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Tại Sao bạn lựa chọn chúng tôi?</h2>
                <p></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images/icon/icons8_trophy_100px.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <h3 style="line-height: 5;">Kỹ Thuật Đỉnh cao</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images/icon/icons8_classroom_100px.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <h3 style="line-height: 5;">Giảng Viên Tận Tâm</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images/icon/icons8_light_on_100px_2.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <h3 style="line-height: 5;">Học Linh Hoạt</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services text-center ftco-animate">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class=""><img src="images/icon/icons8_lightning_bolt_100px_2.png"></span>
                    </div>
                    <div class="text px-md-2">
                        <h3 style="line-height: 5;">Hiệu Quả Ngay</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hết phần thông tin -->

<!-- phần thông số -->
<section class="ftco-counter ftco-bg-dark img" id="section-counter"
    style="background-image: url(' images/black-and-white-sky-girl-photography-female-love-1373917-pxhere.com.jpg '); font-family: Roboto;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row">
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images/icon/icons8_courses_50px.png">
                            <div class="text">
                                <strong class="number" data-number="30" style="font-size: 70px;">0</strong><strong
                                    class="number">+</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Khóa Học</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images/icon/icons8_student_50px.png">
                            <div class="text">
                                <strong class="number" data-number="30000" style="font-size: 70px;">0</strong><strong
                                    class="number">+</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Học Viên Toàn
                                        Quốc</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images/icon/icons8_date_50px.png">
                            <div class="text">
                                <strong class="number" data-number="5000" style="font-size: 70px;">0</strong><strong
                                    class="number">+</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Tổ Ấm Được Hàn
                                        Gắn</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center counter-wrap ftco-animate" style="padding-left: 30px">
                        <div class="block-18 text-center">
                            <img src="images/icon/icons8_classroom_50px_1.png">
                            <div class="text">
                                <strong class="number" data-number="75" style="font-size: 70px;">0</strong><strong
                                    class="number">%</strong>
                                <span style="font-size: 20px; line-height: 1.7em"><strong>Học viên quay lại để học
                                        chuyên sâu</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hết phần thông số -->

<!-- phần khóa học trực tiếp -->
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Khóa Học Trực Tiếp
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Các khóa học Trực Tiếp tiêu biểu</h2>
                <p></p>
            </div>
        </div>
        <div class="row justify-content-center">
            {{-- @forelse ($featured as $featured)
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url( {{ $featured->getFirstMediaUrl('courses_cover );">
            <div class="title p-4">
                <h3> {{$featured->name}} </h3>
            <span>{{$featured->date_time}}</span>
        </div>
        <div class="text p-4 d-flex align-items-end">
            <a href="{{ route('course', [$featured->slug, $featured->id]) }}" class="btn-custom px-4 py-2">Tham Gia
                Ngay</a>
            <div>
                <span class="price">Liên Hệ</span>
                <h3>{{$featured->address}}</h3>
                @php
                echo $featured->introduction
                @endphp
            </div>
        </div>
    </div>
    </div>
    @empty
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <h2 class="mb-3" style="color:coral">Xin lỗi!!! Hiện tại chưa có khóa học nào. Xin hãy quay lại
                    sau
                </h2>
            </div>
        </div>
        @endforelse --}}
    </div>
    </div>
</section>
<!-- hết phần khóa học trực tiếp -->

<!-- phần khóa học online -->
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Khóa Học Online
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Các khóa học Online tiêu biểu</h2>
                <p><a href="https://vlady.edu.vn/p/danh-sach-khoa-hoc/" class="btn btn-warning btn-lg active"
                        role="button" aria-pressed="true">Học Ngay</a></p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img" style="background-image: url('images/1568026404394.jpg ');">
                    <div class="title p-4">
                        <h3>Nữ Thần Se Khít</h3>
                        <span>Hướng dẫn tập kegel từ A-Z</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/kegel-tazama#payment" class="btn-custom px-4 py-2">Học
                            Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/kegel-tazama">Nữ Thần Se Khít</a></h3>
                            <p>Kegel phòng the là bài tập chuyên biệt cho cơ âm đạo, giúp tăng đàn hồi và se khít cơ âm
                                đạo, tăng khoái cảm cho cả hai trong cuộc yêu.
                                Hơn nữa, tập bài tập kegel sẽ giúp giảm thiểu tình trạng bệnh liên quan đến âm đạo như:
                                sa tử cung, sa dạ con, ứ dịch sau sinh,...
                                Còn chần chừ gì nữa, cùng Vlady bước vào bài tập kegel hiệu quả và đầy thú vị này ngay
                                thôi!!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img" style="background-image: url('images/1568026811516.png ');">
                    <div class="title p-4">
                        <h3>BJ Từ Bản Năng Gốc</h3>
                        <span></span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/bj-sieu-biet-tu-ban-nang-goc#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/bj-sieu-biet-tu-ban-nang-goc">BJ Siêu Biệt Từ Bản
                                    Năng Gốc</a></h3>
                            <p>100% đàn ông đều thích được bạn tình sử dụng kỹ thuật này và tất nhiên nếu bạn là một
                                người nghệ sĩ thổi kèn giỏi, bạn sẽ nhanh chóng chiếm lĩnh không chỉ con tim mà cả lý
                                trí anh ấy!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mx-auto">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/051913-07092018-41267202_1113252155491395_5200092298846666752_n.jpg ');">
                    <div class="title p-4">
                        <h3>TƯ THẾ PHÒNG THE</h3>
                        <span></span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/tu-the-phong-the#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/tu-the-phong-the">TƯ THẾ PHÒNG THE</a></h3>
                            <p>Là một trong 3 khoá kỹ thuật độc quyền tại NhungLady Academy, TƯ THẾ PHÒNG THE hứa hẹn là
                                một trong những khoá học thiết thực nhất, chi tiết nhất và bài bản nhất cho chị em phụ
                                nữ, giúp tăng tương tác cho 2 bạn và đổi mới cuộc yêu.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img" style="background-image: url('images/1568026661007.png ');">
                    <div class="title p-4">
                        <h3>MASSAGE KÍCH HOẠT HUYỆT YÊU CHO CHÀNG</h3>
                        <span>Tất tần tật các kỹ thuật massage điêu luyện</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/massage-kich-hoat-huyet-yeu-cho-chang#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/massage-kich-hoat-huyet-yeu-cho-chang">MASSAGE
                                    KÍCH HOẠT HUYỆT YÊU CHO CHÀNG</a></h3>
                            <p>Đàn ông ý mà, ai mà chả muốn được vợ chăm sóc, cung phụng!
                                Massage là liều thuốc hiệu quả giải toả mọi căng thẳng, mệt mỏi cho các chàng sau ngày
                                làm việc hiệu quả, là cầu nối giúp tăng tương tác vợ chồng, là đòn khơi gợi đam mê nơi
                                con tim chàng!!
                                Phụ nữ, sao không thực hành các bí kíp "kích hoạt huyệt yêu" này ngay hôm nay??</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img" style="background-image: url('images/1563853137057.jpg ');">
                    <div class="title p-4">
                        <h3>ĐỌC VỊ ĐÀN ÔNG</h3>
                        <span>Làm thế nào để phát hiện chàng nói dối ? Khi nào thì đàn ông sẽ ngoại tình ?</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/doc-vi-dan-ong#payment" class="btn-custom px-4 py-2">Học
                            Ngay</a>
                        <div>
                            <span class="price">1,790,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/doc-vi-dan-ong">ĐỌC VỊ ĐÀN ÔNG</a></h3>
                            <p>Khóa học với 9 Video online và 2 buổi livestream trực tiếp với chuyên gia dạy bạn cách
                                đọc vị để thấu hiểu chàng. Chàng đang nghĩ gì, chàng thích gì & ghét gì ở bạn ? Làm thế
                                nào để phát hiện chàng nói dối ? Khi nào thì đàn ông sẽ ngoại tình ? Những câu hỏi này
                                sẽ được giải đáp trong khóa học đặc biệt này. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-wrap ftco-animate img"
                    style="background-image: url('images/bi-mat-ve-thu-dam-o-phu-nu-03-1024x672.jpg ');">
                    <div class="title p-4">
                        <h3>NGŨ QUAN PHÒNG THE</h3>
                        <span>Tất tần tật các kỹ thuật massage điêu luyện</span>
                    </div>
                    <div class="text p-4 d-flex align-items-end">
                        <a href="https://vlady.edu.vn/khoa-hoc/ngu-quan-phong-the#payment"
                            class="btn-custom px-4 py-2">Học Ngay</a>
                        <div>
                            <span class="price">1,999,000 đ</span>
                            <h3><a href="https://vlady.edu.vn/khoa-hoc/ngu-quan-phong-the">NGŨ QUAN PHÒNG THE</a></h3>
                            <p>Mùi cơ thể của một người giữ một vai trò không nhỏ trong việc lôi cuốn người khác. Một
                                cuộc nghiên cứu cho thấy rằng 71% đàn ông và phụ nữ xem mùi là một thứ kích thích mạnh
                                mẽ.Một khi đã biết chú ý đến các giác quan, bạn đừng nên gói mình trong những thói quen
                                nữa. Các cảm giác của chúng ta có thể thay đổi theo từng ngày. Và đó chính là khía cạnh
                                quan trọng nhất của tình dục.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- hết phần khóa học online -->

<!--đội ngũ-->
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Đội Ngũ
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Đội Ngũ Của Chúng Tôi</h2>
                <p></p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img" style="background-image: url('images/1546591460673%20%281%29fixed.png ');">
                    </div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Giám Đốc</span>
                        <h3><a href="#">Ms.NhungLady</a></h3>
                        <p>Giám đốc TT Unesco HPPNV, chuyên gia tâm lý - kỹ thuật tình dục học, phù thủy phòng the</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a
                                    href="https://www.youtube.com/channel/UCdU44faIOEuxQhiN-qcn4KQ/featured"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/nhunglady.phunuviet"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/nhung.lady/"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex">
                <div class="coach d-sm-flex align-items-stretch">
                    <div class="img" style="background-image: url('images/ ');"></div>
                    <div class="text py-4 px-5 ftco-animate"></div>
                    <div class="text py-4 px-5 ftco-animate">
                        <span class="subheading">Chuyên Gia</span>
                        <h3><a href="#">Ms.Hương Giang</a></h3>
                        <p>Chuyên gia tâm lý tại tt Unesco Hạnh phúc Phụ nữ Việt</p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-youtube"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"
                                    class="mr-2 d-flex justify-content-center align-items-center"><span
                                        class="icon-instagram"></span></a></li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hết phần đội ngũ-->

<!--khách hàng nói-->
<section class="ftco-section testimony-section"
    style="background-image: url('images/8-su-that-kinh-ngac-ve-sex-khong-phai-ai-cung-biet.png '); font-family: Roboto;"
    data-stellar-background-ratio="0.5">
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
                            {{-- <div class="item">
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
							</div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Hết phần khách hàng-->

<!--Đối tác-->
<section class="ftco-section" style="font-family: Roboto;">
    <!--Carousel Wrapper-->
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Đối tác
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">Các Đối tác của chúng tôi</h2>
                <p></p>
            </div>
        </div>
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col"><img src="images/unesco-logo.jpg" class="img-fluid" alt="1 slide">
                        </div>
                        <div class="col"><img src="images/unicef-logo.png" class="img-fluid" alt="2 slide">
                        </div>
                        <div class="col"><img src="images/nielsen-logo-1200x675-1.jpg" class="img-fluid" alt="3 slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="images/download.png" class="img-fluid" alt="1 slide">
                        </div>
                        <div class="col"><img src="images/unesco-logo.jpg" class="img-fluid" alt="2 slide">
                        </div>
                        <div class="col"><img src="images/unicef-logo.png" class="img-fluid" alt="3 slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="images/nielsen-logo-1200x675-1.jpg" class="img-fluid" alt="1 slide">
                        </div>
                        <div class="col"><img src="images/download.png" class="img-fluid" alt="2 slide">
                        </div>
                        <div class="col"><img src="images/unicef-logo.png" class="img-fluid" alt="3 slide">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hết phần đối tác-->

<!--Phần tin tức-->
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Group
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3">NGHỆ THUẬT PHÒNG THE ĐỈNH CAO - NHUNG LADY</h2>
                <p><a href="https://www.facebook.com/groups/nghethuatphongthedinhcao/"
                        class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Tham Gia Ngay</a></p>
                <p>Cộng đồng chia sẻ mọi điều thầm kín cho chị em phụ nữ</p>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="http://nuhoangphongthe.com/nu_hoang_phong_the/ban-ron-tren-giuong-giup-phu-nu-tre-lau/"
                        class="block-20"
                        style="background-image: url('images/ban-ron-tren-giuong-giup-phu-nu-tre-lau.jpg ');">
                    </a>
                    <div class="text py-4 d-flex">
                        <div class="desc">
                            <h3 class="heading mt-2"><a
                                    href="http://nuhoangphongthe.com/nu_hoang_phong_the/ban-ron-tren-giuong-giup-phu-nu-tre-lau/">“BẬN
                                    RỘN’ TRÊN GIƯỜNG GIÚP PHỤ NỮ TRẺ LÂU</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="http://nuhoangphongthe.com/nhap-mon-tinh-duc-hoc/diem-nhay-cam-kich-thich-chang-khi-yeu/"
                        class="block-20"
                        style="background-image: url('images/diem-nhay-cam-kich-thich-chang-khi-yeu-1000x570.png ');">
                    </a>
                    <div class="text py-4 d-flex">
                        <div class="desc">
                            <h3 class="heading mt-2"><a
                                    href="http://nuhoangphongthe.com/nhap-mon-tinh-duc-hoc/diem-nhay-cam-kich-thich-chang-khi-yeu/">ĐIỂM
                                    NHẠY CẢM KÍCH THÍCH CHÀNG KHI “YÊU”</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="http://nuhoangphongthe.com/nu_hoang_phong_the/7-buoc-de-dua-chang-len-dinh-bang-mieng/"
                        class="block-20"
                        style="background-image: url('images/7-buoc-de-dua-chang-len-dinh-bang-mieng-1000x570.png ');">
                    </a>
                    <div class="text py-4 d-flex">
                        <div class="desc">
                            <h3 class="heading mt-2"><a
                                    href="http://nuhoangphongthe.com/nu_hoang_phong_the/7-buoc-de-dua-chang-len-dinh-bang-mieng/">7
                                    BƯỚC ĐỂ ĐƯA CHÀNG LÊN ĐỈNH BẰNG MIỆNG</a></h3>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection