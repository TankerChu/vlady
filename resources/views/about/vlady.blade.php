@extends('layouts.master')


@section('banner')
<!-- {{-- banner --}} -->
<section class="hero-wrap js-fullheight">
    <div class="overlay" style="background-image: url('images/1546591477050.jpg' )"></div>
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

                        <a class="nav-item nav-link" id="nav-value-tab" data-toggle="tab" href="#nav-value" role="tab"
                            aria-controls="nav-value" aria-selected="false">Giá trị cốt lõi</a>

                        <a class="nav-item nav-link" id="nav-press-tab" data-toggle="tab" href="#nav-press" role="tab"
                            aria-controls="nav-press" aria-selected="false">Báo chí truyền hình</a>

                        <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                            aria-controls="nav-about" aria-selected="false">Cơ sở vật chất</a>

                        <a class="nav-item nav-link" id="nav-response-tab" data-toggle="tab" href="#nav-response"
                            role="tab" aria-controls="nav-response" aria-selected="false">Phản hồi khách hàng</a>
                    </div>
                </nav>
                <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        Học viện yêu Vlady là trung tâm đầu tiên và duy nhất trực thuộc UNESCO Việt Nam hoạt động trong
                        lĩnh vực phụ nữ và tình dục học. Với hơn 30.000 học viên trong và ngoài nước trong suốt 6 năm
                        hoạt động, chúng tôi tự hào là đơn vị tiên phong trong tư vấn, giảng dạy về lĩnh vực Tâm lý - Kỹ
                        thuật tình dục học tại Việt Nam. Chúng tôi luôn luôn đồng hành và hỗ trợ các học viên qua tư vấn
                        trực tiếp và chia sẻ các kỹ năng, kinh nghiệm trên Group Facebook "NGHỆ THUẬT PHÒNG THE ĐỈNH CAO
                        - NHUNGLADY".
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <strong>Tầm nhìn:</strong> Học viện yêu Vlady hàng đầu Việt Nam và vươn ra toàn Châu Á trong tư
                        vấn, giảng dạy về tâm lý - kỹ thuật tình dục học.
                        <br>
                        <strong>Sứ mệnh:</strong> Học viện yêu Vlady khao khát trở thành người dẫn đường và là người bạn
                        đồng hành cùng 30 triệu phụ nữ Việt trong con đường thay đổi tư tưởng, thay đổi nhận thức để tìm
                        đến đỉnh cao của tâm lý hôm nhân gia đình và tình dục học. Học viện yêu Vlady là thương hiệu
                        biểu tượng cho sự sáng tạo không ngừng, sự chinh phục và đạt đến đỉnh cao trong bộ môn nghệ
                        thuật phòng the.

                    </div>
                    <div class="tab-pane fade" id="nav-value" role="tabpanel" aria-labelledby="nav-value-tab">
                        Chẳng có gì sai nếu bạn muốn học hỏi để hoàn thiện mình, để hiểu mình và hiểu tình, để giữ gìn
                        hạnh phúc của gia đình. Một người phụ nữ "hư", lả lơi, trễ nải nhưng chỉ với người đàn ông của
                        mình thì chẳng có gì sai hay là dễ dãi, buông thả cả. Ai cũng có quyền yêu và được yêu. Ai cũng
                        có quyền khám phá và tìm ra những khoái cảm đỉnh cao trong chính bản thể của mình. Hãy để Vlady
                        giúp các chị em biến giấc mơ thành hiện thực nhé bởi ở chúng tôi có đầy đủ các khóa học từ cơ
                        bản đến chuyên sâu và đặc biệt chuyên sâu.
                    </div>
                    <div class="tab-pane fade" id="nav-press" role="tabpanel" aria-labelledby="nav-press-tab">
                        Hiện nay, những lớp học về nghệ thuật phòng the đỉnh cao hay kỹ thuật tình dục chuyên sâu...
                        đang thu hút nhiều học viên. Ngày càng nhiều chị em tìm đến học viện yêu Vlady để nhờ phù thủy
                        phòng the Nhung Lady tư vấn chuyện tình cảm và tham gia các khóa học kỹ năng phòng the chuyên
                        sâu tại đây nhằm mục đích giúp bản thân tự tin, xinh đẹp, biết cách giữ lửa cho cuộc hôn nhân
                        của mình thêm nồng cháy và hạnh phúc hơn. Đó cũng là một phần lý do giúp cho tên tuổi của Vlady
                        và Ms.NhungLady được nhiều người biết đến hơn, các cơ quan báo chí truyền hình lớn cũng tìm đến
                        chị để mời chị tới chia sẻ kinh nghiệm cho các độc giả của mình như VTV3, VTC, HTV, báo sức khỏe
                        đời sống - cơ quan ngôn luận của bộ Y tế, tạp chí thời trang ELLE, tạp chí The face, Vnexpress,
                        tờ Em đẹp... Chính những thành công vô cùng to lớn trong việc hàn gắn những sứt mẻ hôn nhân, níu
                        giữ hạnh phúc cho nhiều người và khiến hội chị em tự tin, xinh đẹp, quyến rũ hơn đã giúp Vlady
                        khẳng định được chỗ đứng vững chắc nhất của mình, xứng đáng là quán quân trong lĩnh vực giảng
                        dạy và đào tạo về tình dục số một được UNESCO công nhận. Đấy chính là động lực lớn nhất thúc đẩy
                        Ms.NhungLady quyết tâm xây dựng học viện yêu Vlady thành một nơi mà phụ nữ có thể tìm đến, chia
                        sẻ và học hỏi những kỹ năng để hoàn thiện mình bất cứ lúc nào.
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        Không gian tại Vlady hoàn toàn không giống một lớp học bình thường với đầy đủ bàn ghế sách
                        vở.... mà đây là những phòng học rộng thoang thoảng mùi tinh dầu dễ chịu, nhạc không lời du
                        dương, không gian thư thái cho việc học tập đạt hiệu quả cao. Mỗi lớp học có khoảng 30 chị em
                        phụ nữ ở đủ các độ tuổi khác nhau, đa số là nhân viên văn phòng từ 25 - 45 tuổi. Có người chưa
                        chồng, có người đang có chồng con, lại có người vừa bỏ chồng... Tất cả các học viên đều có chung
                        mục đích là học để làm mới mình trong đời sống chăn gối, giúp bản thân tự tin và hạnh phúc hơn.
                        Đặc biệt, ở những lớp học chuyên sâu hơn, học viên sẽ được trải nghiệm phòng chức năng có một
                        không hai được mệnh danh “căn phòng đỏ quyền lực ngài Grey” với cơ sở vật chất sang trọng và đầy
                        bí ẩn, hình ảnh âm thanh sống động và trung thực, hứa hẹn đem đến cho tất cả học viên một trải
                        nghiệm “thiên đường phòng the” ấn tượng và sâu đậm.
                    </div>
                    <div class="tab-pane fade" id="nav-response" role="tabpanel" aria-labelledby="nav-response-tab">
                        Rất nhiều học viên sau khi tham gia các khóa học phòng the tại học viện yêu Vlady thú nhận rằng,
                        ban đầu khi nghe tên các khóa học “Nữ hoàng phòng the", hay “kỹ nghệ thổi kèn" thì họ cảm thấy
                        rất ngượng ngùng, nhiều người trong số họ không dám đăng ký bằng tên thật của mình, thậm chí
                        giấu diếm chồng đi học. Tuy vậy, sau quá trình học tập, thực hành và trải nghiệm trực tiếp tại
                        học viện yêu Vlady, họ thường rất hài lòng về những kiến thức mà mình có được, hài lòng về sự
                        tâm huyết giảng dạy của giảng viên, cơ sở vật chất hiện đại, giáo cụ trực quan sinh động, hỗ trợ
                        đắc lực cho việc học tập đạt hiệu quả cao, … và rất nhiều những lời khen có cánh cho trung tâm.
                        Hơn 75% học viên đã quay lại học tiếp lên các khóa học chuyên sâu về tâm lý - kỹ năng phòng the,
                        coaching 1:1 với giảng viên, hay trị liệu khoái cảm. Không ít học viên tỏ ra nuối tiếc: "ước gì
                        đã học lớp này sớm hơn thì hôn nhân không đổ vỡ, chồng không đi ngoại tình hay cuộc hôn nhân trở
                        nên tẻ nhạt đến vậy." Hàng ngàn học viên đã trải nghiệm thiên đường phòng the Vlady, còn bạn thì
                        sao?
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
    style="background-image: url('images/8-su-that-kinh-ngac-ve-sex-khong-phai-ai-cung-biet.jpg '); font-family: Roboto,serif;"
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