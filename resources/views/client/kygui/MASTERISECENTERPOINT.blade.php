@extends('client.kygui.layout.kygui-layout')
@section('tieudetrang')

@endsection
@section('noidung')
                 <!-- kygui -->
                 <div class="container-xxl py-5">
            <div class=" baiviet-kygui text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Ký gửi và Tư vấn</h1>
                <p>Hãy để lại thông tin để chúng tôi hỗ trợ bạn ngay lập tức. Chúng tôi sẽ liên hệ trong thời gian sớm nhất.</p>
            </div>
            <div class="kygui w-75 m-auto">
                <img src="https://duantheglobalcity.vn/wp-content/uploads/2022/03/du-an-the-global-city.jpg" alt="">
                <div class="kyguitext mt-5">
                    <ul>
                        <li><p>Nhận ký gửi bán và cho thuê Masteri Centre Point, Lumiere Boulevard, The Manhattan, ... (căn hộ, nhà phố, biệt thự khu đô thị Vinhomes Grand Park Q9)</p></li>
                        <li><p>Để bất động sản của quý anh chị được bán hoặc cho thuê nhanh nhất và hiệu quả, anh chị có thể gửi thông tin sản phẩm tới Mê Nhà ngay hôm nay.</p></li>
                    </ul>
                </div>
            </div>
         </div>
        <!-- endkygui -->
        <!-- kyguiform -->
        <div class="kyguicontainer">
            <div class="container-xxl py-5 row d-flex justify-content-center m-auto">
                <!-- Phần Form nhập thông tin doanh nghiệp -->
                        <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-5">
                            <form class="kyguiform">
                                <h1 class="text-white">Ký gửi và tư vấn</h1>
                                <div class="mb-3">
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Họ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Email">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập Số điện thoại">
                                </div>
                                <div class="mb-3">
                                <div class="col-6">
                                    <input type="radio" name="options" id="option1">
                                    <label class="text-white" for="option1">Tìm mua/Thuê</label>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="options" id="option2">
                                    <label class="text-white" for="option2">Ký gửi bán/thuê</label>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="options" id="option3">
                                    <label class="text-white" for="option3">Xem bản giá</label>
                                </div>
                                <div class="col-6">
                                    <input type="radio" name="options" id="option4">
                                    <label class="text-white" for="option4">Hẹn xem nhà</label>
                                </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label text-white" for="exampleCheck1">Tôi chấp nhân cho website lưu thông tin của tôi</label>
                                </div>
                                <div class="mb-3 d-flex justify-content-center">
                                    <button class="btn btn-primary">Gửi</button>
                                </div>
                            </form>
                        </div>
                <!-- Phần Hiển thị thông tin doanh nghiệp -->
            
                <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-5">
                    <div class="kyguithongtin">
                        
                        <img src="/user/img/ngobaopng.PNG">
                        <span class="text-white">Chuyên viên tư vấn</span>
                        <h4 class="text-white">Ngô Văn Anh Hoài Bảo</h4>
                        <p class="text-white">Bước chân vào thị trường bất động sản từ năm 2018, trải qua nhiều giai đoạn phát triển của bất động sản khu đông.</p>
                        <a  href="tel:+84%200339321355" class="btn btn-primary m-1"><i class="fa-solid fa-phone"></i> 0339321355 </a>
                        <span class="m-1"><a href="https://zalo.me/0339321355" class="btn btn-primary">Zalo</a></span>
                        <span class="m-1"><a href="https://zalo.me/0339321355" class="btn btn-primary"><i class="fa-brands fa-facebook-f"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
@endsection