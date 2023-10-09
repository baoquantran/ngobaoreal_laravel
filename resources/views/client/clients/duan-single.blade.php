@extends('client.clients.layout.layoutpd')
@section('tieudetrangpd')

@endsection

@section('noidungpd')
   <!-- masteries -->
   <div class="container-xxl py-5">
    <div class="masteries align-items-center" style="padding-top: 100px ;">
        <!-- -------------------------------gioithieuduan--------------------------------------- -->
        <div>
            <h1 class="text-center">{{$project->name_product}}</h1>
            <img src="/{{$project->img}}" alt="">
        </div>
        <!-- -------------------------------------------endgioithieuduan----------------------------------- -->
        <!-- ---------------------tong quang du an --------------------------------------- -->
        <div id="tongquan">
           {!! $project->tongquan !!}
        </div>
        <!-- ----------------------------- ket thuc tong quang du an --------------------------------- -->
        <!-- -------------------------------------vitri-------------------------------------------------- -->
        <div id="vitri">
            {!! $project->vitri !!}
        </div>
        <!-- ------------------------------------------------------ ketthucvitri ------------------------------- -->
        <!-- ----------------------------------------------------tienich----------------------------------------------- -->
        <div id="tienich">
            {!! $project->tienich !!}
        </div>
         <!-- -----------------------------------------------------entienich-------------------------------------------------- -->
          <!-- -----------------------------------------------------matbang-------------------------------------------------- -->
        <div id="matbang">
       
            {!! $project->matbang !!}
        </div>
         <!-- --------------------------------------------------------endmatbang------------------------------------------------------------------ -->  
         <!-- -----------------------------------------------------thanhtoan-------------------------------------------------- -->
        <div id="thanhtoan">
            {!! $project->thanhtoan !!}
        </div>
         <!-- --------------------------------------------------------endthanhtoan------------------------------------------------------------------ -->  
        </div>
    </div>

<!-- kyguiform -->
<div class="kyguicontainer" id="lienhe">
        <div class="container-xxl py-5 row d-flex justify-content-center m-auto">
            <!-- Phần Form nhập thông tin doanh nghiệp -->
            <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-5">
                <form class="kyguiform" id="kyguifooter" method="post" action="{{ route('kygui.store') }}">
                    @csrf
                    <h1 class="text-white">Ký gửi và tư vấn</h1>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nhập Họ & Tên" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nhập Email"
                            pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" name="phone" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Nhập Số điện thoại" required>
                    </div>
                    <div class="mb-3">
                        <div class="col-6">
                            <input type="radio" name="options" value="1" id="option1" checked>
                            <label class="text-white" for="option1">Tìm mua/Thuê</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="options" value="2" id="option2">
                            <label class="text-white" for="option2">Ký gửi bán/thuê</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="options" value="3" id="option3">
                            <label class="text-white" for="option3">Xem bảng giá</label>
                        </div>
                        <div class="col-6">
                            <input type="radio" name="options" value="4" id="option4">
                            <label class="text-white" for="option4">Hẹn xem nhà</label>
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-white" for="exampleCheck1">Tôi chấp nhân cho website lưu
                            thông tin của tôi</label>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" id="liveToastBtn">Gửi</button>
                    </div>
                </form>
            </div>
            <!-- Phần Hiển thị thông tin doanh nghiệp -->

            <div class="col-lg-6 col-md-12 d-flex justify-content-center mt-5">
                <div class="kyguithongtin">

                    <img src="/user/img/ngobaopng.PNG">
                    <span class="text-white">Chuyên viên tư vấn</span>
                    <h4 class="text-white">Ngô Văn Anh Hoài Bảo</h4>
                    <p class="text-white">Bước chân vào thị trường bất động sản từ năm 2018, trải qua nhiều giai đoạn
                        phát triển của bất động sản khu đông.</p>
                    <a href="tel:+84%200339321355" class="btn btn-primary m-1"><i class="fa-solid fa-phone"></i>
                        0339321355 </a>
                    <span class="m-1"><a href="https://zalo.me/0339321355" class="btn btn-primary">Zalo</a></span>
                    <span class="m-1"><a href="https://zalo.me/0339321355" class="btn btn-primary"><i
                                class="fa-brands fa-facebook-f"></i></a></span>
                </div>
            </div>
        </div>
    </div>
    <!-- endformkygui -->

        <!-- endmasteries -->
@endsection