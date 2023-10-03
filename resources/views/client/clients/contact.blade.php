@extends('client.clients.layout.layout')
@section('tieudetrang')
@endsection
@section('noidung')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Ngô Bảo Real liên hệ</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Liên hệ</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="/user/img/ngobao4.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- satr-contact -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Liên hệ Ngô Bảo Real</h1>
                <p>Liên hệ với chúng tôi tại Ngô Bảo Real để biết thêm thông tin và hỗ trợ tốt nhất về bất động sản và dịch
                    vụ của chúng tôi. Chúng tôi sẵn sàng lắng nghe và giải quyết mọi câu hỏi của bạn.</p>
            </div>
            <div class="row g-4">
                <div class="col-12">
                    <div class="row gy-4">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="bg-light rounded p-3">
                                <div class="d-flex align-items-center bg-white rounded p-3"
                                    style="border: 1px dashed rgba(228, 168, 82)">
                                    <div class="icon me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                    </div>
                                    <span>City Gate buidling,67-69 Xa lộ Hà Nội,Thảo Điền, Q2, TPHCM</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="bg-light rounded p-3">
                                <div class="d-flex align-items-center bg-white rounded p-3"
                                    style="border: 1px dashed rgba(228, 168, 82)">
                                    <div class="icon me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-envelope-open text-primary"></i>
                                    </div>
                                    <span> ngobao.iqiglobal@gmail.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="bg-light rounded p-3">
                                <div class="d-flex align-items-center bg-white rounded p-3"
                                    style="border: 1px dashed rgba(228, 168, 82)">
                                    <div class="icon me-3" style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text-primary"></i>
                                    </div>
                                    <span>0339321355</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp map " data-wow-delay="0.1s">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.130638871077!2d106.73371607481852!3d10.80130505873478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752718291bf603%3A0x7c6f84cdf4c0f649!2sIQI%20Vietnam!5e0!3m2!1sen!2s!4v1694691635225!5m2!1sen!2s"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>


                <div class="col-md-6">
                    @if (session()->has('thongbao'))
                        <i class="text-danger">
                            {{ session('thongbao') }}
                        </i>
                    @endif
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        <form method="post" action="{{ route('tuvan.store') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your Name" required>
                                        <label for="name">Nhập tên</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email"
                                            pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"
                                            required>
                                        <label for="email">Nhập email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="phone" id="subject"
                                            placeholder="Subject" required>
                                        <label for="subject">Nhập số điện thoại</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="note" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Nội dung</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Gửi</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end con tact -->
@endsection
