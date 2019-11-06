@extends('layouts/master')

@section('banner')
<section class="hero-wrap js-fullheight">
    {{-- Để ảnh banner của khóa học --}}
    <div class="overlay" style="background-image: url( {{ $course->getFirstMediaUrl('courses_cover') }} );"
        data-stellar-background-ratio="1"></div>
</section>
@endsection

@section('content')
{{-- giới thiệu khóa học --}}
<section class="ftco-section" style="font-family: Roboto;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 heading-section text-center ftco-animate">
                <span class="subheading">
                    <i class="db-left"></i>
                    Khóa học trực tiếp tại trung tâm
                    <i class="db-right"></i>
                </span>
                <h2 class="mb-3"> {{ $course->name}} </h2>
                {{-- giới thiệu và thông tin khóa học --}}
                @php
                echo $course->introduction
                @endphp
                {{-- hết phần giới thiệu và thông tin --}}
                <a href="#dang-ki-hoc" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Đăng kí
                    học ngay</a>
            </div>
        </div>
    </div>
</section>

{{-- nội dung khóa học --}}
<section class="ftco-about d-md-flex">
    {{-- ảnh (và video của khóa học) của khóa học --}}
    <div class="one-half img">
        @if (is_null($course->video_link))
        <div class="fs-carousel-about"
            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": true, "contain": true, "autoPlay": true }'>
            @foreach ($course->getMedia('courses_image') as $courseGallery)
            <div class="carousel-cell-about" style="background-image: url('{{ $courseGallery->getFullUrl() }}' );">
            </div>
            @endforeach
        </div>
        @else
        <div class="fs-carousel-about"
            data-flickity='{ "draggable": true , "wrapAround": true , "pauseAutoPlayOnHover": false, "contain": true, "autoPlay": true }'>
            @foreach ($course->getMedia('courses_image') as $courseGallery)
            <div class="carousel-cell-about" style="background-image: url('{{ $courseGallery->getFullUrl() }}' );">
                <a href="{{$course->video_link}}"
                    class="icon popup-youtube d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>

    <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
            <h2 class="mb-4">Nội Dung Khóa Học</h2>
        </div>
        <div>
            {{-- phần nội dung khóa học ở đây --}}
            @php
            echo $course->content
            @endphp
            {{-- hết phần nội dung khóa học --}}
        </div>
    </div>
</section>

{{-- Phần phản hồi của học viên --}}
<section class="ftco-section testimony-section"
    style="background-image: url('{{ asset('images/8-su-that-kinh-ngac-ve-sex-khong-phai-ai-cung-biet.png') }} '); font-family: Roboto;"
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
                                        style="background-image: url('{{ asset('images/icon/vlady-logo-1024x726.png ') }} ')">
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
                                        style="background-image: url('{{ asset('images/icon/vlady-logo-1024x726.png ') }} ')">
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
                                        style="background-image: url('{{ asset('images/icon/vlady-logo-1024x726.png ') }} ')">
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
                                        style="background-image: url('{{ asset('images/icon/vlady-logo-1024x726.png ') }} ')">
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
{{-- Hết phần phản hồi --}}
@endsection


@section('form')
{{-- Form đăng kí học ngay --}}
<section class="ftco-section contact-section" id="dang-ki-hoc"
    style="background-image: url('{{ asset('images/') }} ') ">
    <div class="container">
        <div class="row">
            <h2 class="mx-auto text-center h2 font-weight-bold">Đăng Kí Ngay</h2>
            <div class="container mt-5">
                <div class="row block-9 justify-content-center">
                    <div class="col-md-6 ftco-animate">
                        @if(session('message'))
                        <div class='alert alert-success'>
                            {{ session('message') }}
                        </div>
                        @endif
                        @if ( ! session()->has('message'))
                        <form action="{{ route('course', [$course->slug, $course->id]) }}" method="post"
                            class="contact-form">
                            @include('classes/register-form')
                        </form>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- Hết form đăng kí --}}
@endsection