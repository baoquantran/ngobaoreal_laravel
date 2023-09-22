@extends('user.layout')
@section('tieudetrang')
@endsection
@section('noidung')
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Ngô Bảo Real tuyển dụng</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Tuyển dụng</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="/user/img/ngobao6.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- bai viet -->
        <div class="container-fluid mb-5 p-4 justify-content-center wow fadeIn mt-5 row ps-5" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="p-5 baigioithieu mt-2 col-3 ms-2 me-2">
               <h2>Vị trí đang tuyển</h2>
               <hr>
               <a href="">Chuyên viên kinh doanh</a>
               <hr>
            </div>
            <div class="p-5 baigioithieu col-8 mt-2 ms-2 me-2">
                <span>#chuyenvienkinhdoanh #duancaocap</span>
                <h3>Chuyên viên kinh doanh</h3>
                <button class="btn btn-primary mt-5" data-bs-toggle="modal" data-bs-target="#ungtuyen">ứng tuyển</button>
                <!-- modal -->
                <div class="modal fade mt-5" id="ungtuyen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-primary">
                          <h5 class="modal-title text-white" id="exampleModalLabel">Để lại thông tin liên hệ cho chúng tôi</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <form>
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
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">Tôi chấp nhân cho website lưu thông tin của tôi</label>
                                </div>
                                
                              </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
             </div>
        </div>
        <!-- end bai viet -->
@endsection